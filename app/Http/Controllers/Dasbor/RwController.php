<?php

namespace App\Http\Controllers\Dasbor;
use App\Http\Controllers\Controller;
use App\Models\Rw;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Rw::where([
            ['nama_rw', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('nama_rw', 'LIKE', '%' . $s . '%')->get();
                }
            }]
        ])->orderBy('nama_rw', 'asc')->paginate(5);

        return view('dasbor.rw.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelurahan = Kelurahan::where('status', 'Publish')->get();
        return view('dasbor.rw.tambah',compact('kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // membuat validasi
        $request->validate(
        [
            'nama_rw' => 'required',
            'kepala_rw' => 'required',
            'jumlah_penduduk' => 'required',
            'jumlah_kasus' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'id_kelurahan' => 'required',
        ],
        [
            'nama_rw.required' => 'Bagian ini wajib dilengkapi',
            'kepala_rw.required' => 'Bagian ini wajib dilengkapi',
            'jumlah_penduduk.required' => 'Bagian ini wajib dilengkapi',
            'latitude.required' => 'Bagian ini wajib dilengkapi',
            'longitude.required' => 'Bagian ini wajib dilengkapi',
            'jumlah_kasus.required' => 'Bagian ini wajib dilengkapi',
        ]);

        $data = new Rw();

        // buat variabel baru
        $data->id_kelurahan = $request->id_kelurahan;

        $data->nama_rw = $request->nama_rw;
        $data->kepala_rw  = $request->kepala_rw;
        $data->jumlah_penduduk = $request->jumlah_penduduk;
        $data->latitude = $request->latitude;
        $data->longitude = $request->longitude;
        $data->jumlah_kasus = $request->jumlah_kasus;

        // proses simpan
        $data->save();

        // menampilkan notifikasi alert
        alert()->success('Berhasil', 'Data telah berhasil ditambahkan ke database')->autoclose(1100);

        // mengalihkan halaman
        return redirect('dasbor/rw/detail/' . Rw::find($data->id)->id);

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = RW::where('id', $id)->first();
        return view('dasbor.rw.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = RW::where('id', $id)->first();
        $kelurahan = Kelurahan::where('status', 'Publish')->get();
        return view('dasbor.rw.ubah',compact('data','kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rw)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama_rw' => 'required',
                'kepala_rw' => 'required',
                'jumlah_penduduk' => 'required',
                'jumlah_kasus' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'id_kelurahan' => 'required',
            ],
            [
                'nama_rw.required' => 'Bagian ini wajib dilengkapi',
                'kepala_rw.required' => 'Bagian ini wajib dilengkapi',
                'jumlah_penduduk.required' => 'Bagian ini wajib dilengkapi',
                'latitude.required' => 'Bagian ini wajib dilengkapi',
                'longitude.required' => 'Bagian ini wajib dilengkapi',
                'jumlah_kasus.required' => 'Bagian ini wajib dilengkapi',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $rw = Rw::find($rw);

                $rw->id_kelurahan = $request->id_kelurahan;
                
                $rw->nama_rw = $request->nama_rw;
                $rw->kepala_rw  = $request->kepala_rw;
                $rw->jumlah_penduduk = $request->jumlah_penduduk;
                $rw->latitude = $request->latitude;
                $rw->longitude = $request->longitude;
                $rw->google_map_embed_script = $request->google_map_embed_script;
                $rw->jumlah_kasus = $request->jumlah_kasus;

                $rw->update();
                Alert::toast('Data Berhasil dibuat!', 'success');
                return redirect('dasbor/rw');

            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy($rw)
    {
        $data = RW::find($rw);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.rw.index');
    }
}

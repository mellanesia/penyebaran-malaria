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
        return view('dasbor.rw.create',compact('kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama_rw'      => 'required',
                'kepala_rw'      => 'required',
                'jumlah_penduduk'      => 'required',
                'jumlah_kasus'      => 'required',
                'google_map_embed_script'      => 'required',
                'latitude'      => 'required',
                'longitude'      => 'required',
                'id_kelurahan'      => 'required',
                'status'      => 'required',
            ],
            [
                'nama_rw.required' => 'Nama RW tidak boleh kosong!',
                'kepala_rw.required' => 'Nama Kepala Kelurahan tidak boleh kosong!',
                'jumlah_penduduk.required' => 'Jumlah Penduduk tidak boleh kosong!',
                'google_map_embed_script.required' => 'Google Map Embed Scipt tidak boleh kosong!',
                'latitude.required' => 'Latitude tidak boleh kosong!',
                'longitude.required' => 'Longitude Kelurahan tidak boleh kosong!',
                'jumlah_kasus.required' => 'Jumlah Kasus tidak boleh kosong!',
                // 'deskripsi.required' => 'Deskripsi Kategori tidak boleh kosong!',
                // 'deskripsi.max' => 'Deskripsi Kategori maximal 255 karekter!',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $rw = new Rw();
                $rw->nama_rw        = $request->nama_rw;
                $rw->kepala_rw  = $request->kepala_rw;
                $rw->jumlah_penduduk   = $request->jumlah_penduduk;
                $rw->latitude          = $request->latitude;
                $rw->longitude         = $request->longitude;
                $rw->id_kelurahan        = $request->id_kelurahan;
                $rw->google_map_embed_script        = $request->google_map_embed_script;
                $rw->status            = $request->status;
                $rw->jumlah_kasus            = $request->jumlah_kasus;
                $rw->save();
                Alert::toast('Data Berhasil dibuat!', 'success');
                return redirect('dasbor/rw');

            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show($rw)
    {

        $data = RW::where('id', $rw)->first();
        return view('dasbor.rw.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($rw)
    {
        $data = RW::where('id', $rw)->first();
        $kelurahan = Kelurahan::where('status', 'Publish')->get();
        return view('dasbor.rw.edit',compact('data','kelurahan'));
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
                'nama_rw'      => 'required',
                'kepala_rw'      => 'required',
                'jumlah_penduduk'      => 'required',
                'google_map_embed_script'      => 'required',
                'latitude'      => 'required',
                'longitude'      => 'required',
                'id_kelurahan'      => 'required',
                'status'      => 'required',
                'jumlah_kasus'      => 'required',
            ],
            [
                'nama_rw.required' => 'Nama RW tidak boleh kosong!',
                'kepala_rw.required' => 'Nama Kepala Kelurahan tidak boleh kosong!',
                'jumlah_penduduk.required' => 'Jumlah Penduduk tidak boleh kosong!',
                'google_map_embed_script.required' => 'Google Map Embed Scipt tidak boleh kosong!',
                'latitude.required' => 'Latitude tidak boleh kosong!',
                'longitude.required' => 'Longitude Kelurahan tidak boleh kosong!',
                'jumlah_kasus.required' => 'Jumlah Kasus tidak boleh kosong!',

                // 'deskripsi.required' => 'Deskripsi Kategori tidak boleh kosong!',
                // 'deskripsi.max' => 'Deskripsi Kategori maximal 255 karekter!',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $rw = Rw::find($rw);
                $rw->nama_rw        = $request->nama_rw;
                $rw->kepala_rw  = $request->kepala_rw;
                $rw->jumlah_penduduk   = $request->jumlah_penduduk;
                $rw->latitude          = $request->latitude;
                $rw->longitude         = $request->longitude;
                $rw->id_kelurahan        = $request->id_kelurahan;
                $rw->google_map_embed_script        = $request->google_map_embed_script;
                $rw->status            = $request->status;
                $rw->jumlah_kasus            = $request->jumlah_kasus;

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

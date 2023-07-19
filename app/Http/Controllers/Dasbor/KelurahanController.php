<?php

namespace App\Http\Controllers\Dasbor;
use App\Http\Controllers\Controller;
use App\Models\Kelurahan;
use App\Models\Distrik;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas = Kelurahan::where([
            ['nama_kelurahan', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('nama_kelurahan', 'LIKE', '%' . $s . '%')
                        // ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->orderBy('nama_kelurahan', 'asc')->paginate(5);
        $jumlahtrash = Kelurahan::onlyTrashed()->count();
        $jumlahdraft = Kelurahan::where('status', 'Draft')->count();
        $datapublish = Kelurahan::where('status', 'Publish')->count();

        return view('dasbor.kelurahan.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distrik = Distrik::where('status', 'Publish')->get();
        return view('dasbor.kelurahan.tambah', compact('distrik'));
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
                'nama_kelurahan'      => 'required',
                'kepala_kelurahan'      => 'required',
                'jumlah_penduduk'      => 'required',
                'google_map_embed_script'      => 'required',
                'latitude'      => 'required',
                'longitude'      => 'required',
                'id_distrik'      => 'required',
                'status'      => 'required',
            ],
            [
                'nama_kelurahan.required' => 'Nama Kelurahan tidak boleh kosong!',
                'kepala_kelurahan.required' => 'Nama Kepala Kelurahan tidak boleh kosong!',
                'jumlah_penduduk.required' => 'Jumlah Penduduk tidak boleh kosong!',
                'google_map_embed_script.required' => 'Google Map Embed Scipt tidak boleh kosong!',
                'latitude.required' => 'Latitude tidak boleh kosong!',
                'longitude.required' => 'Longitude Kelurahan tidak boleh kosong!',
                // 'deskripsi.required' => 'Deskripsi Kategori tidak boleh kosong!',
                // 'deskripsi.max' => 'Deskripsi Kategori maximal 255 karekter!',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $kelurahan = new Kelurahan();
                $kelurahan->nama_kelurahan    = $request->nama_kelurahan;
                $kelurahan->kepala_kelurahan  = $request->kepala_kelurahan;
                $kelurahan->jumlah_penduduk   = $request->jumlah_penduduk;
                $kelurahan->latitude          = $request->latitude;
                $kelurahan->longitude         = $request->longitude;
                $kelurahan->id_distrik        = $request->id_distrik;
                $kelurahan->google_map_embed_script        = $request->google_map_embed_script;
                $kelurahan->status            = $request->status;
                $kelurahan->save();
                Alert::toast('Data Berhasil dibuat!', 'success');
                return redirect('dasbor/kelurahan');

            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Kelurahan::where('id', $id)->first();
        return view('dasbor.kelurahan.show', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data = Kelurahan::where('id', $id)->first();
        $distrik = Distrik::where('status', 'Publish')->get();
        return view('dasbor.kelurahan.edit', compact('data','distrik'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama_kelurahan'      => 'required',
                'kepala_kelurahan'      => 'required',
                'jumlah_penduduk'      => 'required',
                'google_map_embed_script'      => 'required',
                'latitude'      => 'required',
                'longitude'      => 'required',
                'id_distrik'      => 'required',
                'status'      => 'required',
            ],
            [
                'nama_kelurahan.required' => 'Nama Kelurahan tidak boleh kosong!',
                'kepala_kelurahan.required' => 'Nama Kepala Kelurahan tidak boleh kosong!',
                'jumlah_penduduk.required' => 'Jumlah Penduduk tidak boleh kosong!',
                'google_map_embed_script.required' => 'Google Map Embed Scipt tidak boleh kosong!',
                'latitude.required' => 'Latitude tidak boleh kosong!',
                'longitude.required' => 'Longitude Kelurahan tidak boleh kosong!',
                // 'deskripsi.required' => 'Deskripsi Kategori tidak boleh kosong!',
                // 'deskripsi.max' => 'Deskripsi Kategori maximal 255 karekter!',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $kelurahan = Kelurahan::find($id);
                $kelurahan->nama_kelurahan    = $request->nama_kelurahan;
                $kelurahan->kepala_kelurahan  = $request->kepala_kelurahan;
                $kelurahan->jumlah_penduduk   = $request->jumlah_penduduk;
                $kelurahan->latitude          = $request->latitude;
                $kelurahan->longitude         = $request->longitude;
                $kelurahan->id_distrik        = $request->id_distrik;
                $kelurahan->google_map_embed_script        = $request->google_map_embed_script;
                $kelurahan->status            = $request->status;
                $kelurahan->update();
                Alert::toast('Data Berhasil diubah!', 'success');
                return redirect('dasbor/kelurahan');

            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kelurahan::find($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.kelurahan.index');
    }
}

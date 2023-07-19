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
     * INDEX
     * menampilkan halaman utama 
     */
    public function index()
    {

        $datas = Kelurahan::where([
            ['nama_kelurahan', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('nama_kelurahan', 'LIKE', '%' . $s . '%')->get();
                }
            }]
        ])->orderBy('nama_kelurahan', 'asc')->paginate(5);

        return view('dasbor.kelurahan.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * CREATE
     * menampilkan halaman create / tambah 
     */
    public function create()
    {
        $distrik = Distrik::get();
        return view('dasbor.kelurahan.tambah', compact('distrik'));
    }

    /**
     * STORE
     * menjalankan fungsi store atau menambah data ke database
     */
    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'nama_kelurahan' => 'required',
                'id_distrik' => 'required',
            ],
            [
                'nama_kelurahan.required' => 'Bagian ini wajib dilengkapi',
                'id_distrik.required' => 'Bagian ini wajib dilengkapi',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $kelurahan = new Kelurahan();

                // buat variabel baru
                $kelurahan->nama_kelurahan = $request->nama_kelurahan;
                $kelurahan->id_distrik = $request->id_distrik;

                // proses simpan
                $kelurahan->save();

                // menampilkan notifikasi alert
                alert()->success('Berhasil', 'Data telah berhasil ditambahkan ke database')->autoclose(1100);
                return redirect('dasbor/kelurahan');

            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    /**
     * SHOW
     * menampilkan halaman show atau data secara detail 
     */
    public function show($id)
    {
        $data = Kelurahan::where('id', $id)->first();
        return view('dasbor.kelurahan.detail', compact('data'));
    }
    
    /**
     * EDIT
     * menampilkan halaman edit 
     */
    public function edit( $id)
    {
        $data = Kelurahan::where('id', $id)->first();
        $distrik = Distrik::get();
        return view('dasbor.kelurahan.ubah', compact('data','distrik'));

    }

    /**
     * UPDATE
     * menjalankan fungsi update atau mengubah data dari database
     */
    public function update(Request $request, $id)
    {
        // membuat validasi
        $request->validate(
        [
            'nama_kelurahan' => 'required',
            'id_distrik' => 'required',
        ],
        [
            'nama_kelurahan.required' => 'Bagian ini wajib dilengkapi',
            'id_distrik.required' => 'Bagian ini wajib dilengkapi',
        ]);

        $data = Kelurahan::find($id);

        // buat variabel baru
        $data->nama_kelurahan = $request->nama_kelurahan;
        $data->id_distrik = $request->id_distrik;

        // proses simpan
        $data->update();

        // menampilkan notifikasi alert
        alert()->success('Berubah!', 'Data telah berhasil diubah')->autoclose(1100);

        // mengalihkan halaman
        return redirect('dasbor/kelurahan/detail/' . $request->id);

    }

    /**
     * DESTROY
     * menjalankan fungsi destroy atau menghapus data dari database
     */
    public function destroy($id)
    {
        $data = Kelurahan::find($id);
        $data->delete();
        alert()->success('Terhapus!', 'Data telah terhapus secara permanen!')->autoclose(1100);
        return redirect()->back();
    }
}

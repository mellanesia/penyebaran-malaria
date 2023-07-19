<?php

namespace App\Http\Controllers\Dasbor;
use App\Http\Controllers\Controller;
use App\Models\Distrik;
use Illuminate\Http\Request;

class DistrikController extends Controller
{
    /**
     * INDEX
     * menampilkan halaman utama 
     */
    public function index()
    {
        $datas = Distrik::where([
            ['nama_distrik', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('nama_distrik', 'LIKE', '%' . $s . '%')->get();
                }
            }]
        ])->orderBy('nama_distrik', 'asc')->paginate(5);

        return view('dasbor.distrik.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * CREATE
     * menampilkan halaman create / tambah 
     */
    public function create()
    {
        return view('dasbor.distrik.tambah');
    }

    /**
     * STORE
     * menjalankan fungsi store atau menambah data ke database
     */
    public function store(Request $request)
    {
        // membuat validasi
        $request->validate([
            'nama_distrik' => 'required',
        ],
        [
            'nama_distrik.required' => 'Bagian ini wajib dilengkapi',
        ]);

        $data = new Distrik();

        // buat variabel baru
        $data->nama_distrik = $request->nama_distrik;
        $data->jumlah_penduduk = $request->jumlah_penduduk;

        // proses simpan
        $data->save();

        // menampilkan notifikasi alert
        alert()->success('Berhasil', 'Data telah berhasil ditambahkan ke database')->autoclose(1100);

        // mengalihkan halaman
        return redirect('dasbor/distrik/detail/' . Distrik::find($data->id)->id);

    }

    /**
     * SHOW
     * menampilkan halaman show atau data secara detail 
     */
    public function show($id)
    {
        $data = Distrik::where('id', $id)->first();
        return view('dasbor.distrik.detail', compact('data'));
    }

    /**
     * EDIT
     * menampilkan halaman edit 
     */
    public function edit($id)
    {
        $data = Distrik::where('id', $id)->first();
        return view('dasbor.distrik.ubah', compact('data'));
    }

    /**
     * UPDATE
     * menjalankan fungsi update atau mengubah data dari database
     */
    public function update(Request $request, $id)
    {
        // membuat validasi
        $request->validate([
            'nama_distrik' => 'required',
        ],
        [
            'nama_distrik.required' => 'Bagian ini wajib dilengkapi',
        ]);

        $data = Distrik::find($id);

        // buat variabel baru
        $data->nama_distrik = $request->nama_distrik;
        $data->jumlah_penduduk = $request->jumlah_penduduk;

        // proses simpan
        $data->update();

        // menampilkan notifikasi alert
        alert()->success('Berubah!', 'Data telah berhasil diubah')->autoclose(1100);

        // mengalihkan halaman
        return redirect('dasbor/distrik/detail/' . $request->id);
    }

    /**
     * DESTROY
     * menjalankan fungsi destroy atau menghapus data dari database
     */
    public function destroy($id)
    {
        $data = Distrik::find($id);
        $data->delete();
        alert()->success('Terhapus!', 'Data telah terhapus secara permanen!')->autoclose(1100);
        return redirect()->back();
    }

}

<?php

namespace App\Http\Controllers\Dasbor;
use App\Http\Controllers\Controller;
use App\Models\Distrik;
use Illuminate\Http\Request;

class DistrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Distrik::where([
            ['nama_distrik', '!=', Null],
            [function ($query) {
                if (($s = request()->s)) {
                    $query->orWhere('nama_distrik', 'LIKE', '%' . $s . '%')
                        // ->orWhere('middle_name', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->orderBy('nama_distrik', 'asc')->paginate(5);
        $jumlahtrash = Distrik::onlyTrashed()->count();
        $jumlahdraft = Distrik::where('status', 'Draft')->count();
        $datapublish = Distrik::where('status', 'Publish')->count();

        return view('dasbor.distrik.index', compact('datas', 'jumlahtrash', 'jumlahdraft', 'datapublish'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dasbor.distrik.create');
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
        $data->status = $request->status;

        // proses simpan
        $data->save(); 

        // menampilkan notifikasi alert
        alert()->success('Berhasil', 'Data telah ditambahkan')->autoclose(1100);   
        
        // mengalihkan halaman
        return redirect('dasbor/distrik/show/' . Distrik::find($data->id)->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Distrik  $distrik
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Distrik::where('id', $id)->first();
        return view('dasbor.distrik.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Distrik  $distrik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Distrik::where('id', $id)->first();
        return view('dasbor.distrik.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Distrik  $distrik
     * @return \Illuminate\Http\Response
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
        $data->status = $request->status;

        // proses simpan
        $data->update(); 

        // menampilkan notifikasi alert
        alert()->success('Berhasil', 'Data telah diubah')->autoclose(1100);   
        
        // mengalihkan halaman
        return redirect('dasbor/distrik/show/' . $request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Distrik  $distrik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('destroy');
        $data = Distrik::find($id);
        $data->delete();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('dasbor.distrik');
    }
}

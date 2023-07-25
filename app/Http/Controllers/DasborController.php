<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use App\Models\Kelurahan;
use App\Models\Distrik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class DasborController extends Controller
{
    // INDEX
    public function index()
    {
        if(Auth::user()->hasRole('administrator')){
            
            $label = Kelurahan::get();
            $grafik = Kelurahan::select('kelurahans.id',  DB::raw('SUM(rws.jumlah_kasus) as total'))
                                ->leftJoin('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
                                ->groupBy('kelurahans.id')
                                ->get();                                
            return view('dasbor.index',compact('grafik','label'));


        } elseif(Auth::user()->hasRole('guest')){
            return view('dasbor.index');
        }
    }

    public function json()
    {
        $datapublish = Rw::with('kelurahan')->get();
        $data_maps = json_encode($datapublish);
        echo $data_maps;
    }

}

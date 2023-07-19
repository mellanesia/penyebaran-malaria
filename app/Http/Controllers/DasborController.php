<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use App\Models\Kelurahan;
use App\Models\Distrik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class DasborController extends Controller
{
    // INDEX
    public function index()
    {
        if(Auth::user()->hasRole('administrator')){
            $rw = Rw::get()->count();
            $kelurahan = Kelurahan::get()->count();
            $distrik = Distrik::get()->count();
            return view('dasbor.index',compact('rw','kelurahan','distrik'));

        } elseif(Auth::user()->hasRole('guest')){
            return view('dasbor.index');
        }
    }

    public function json()
    {
        $datapublish = Rw::get();
        $data_maps = json_encode($datapublish);
        echo $data_maps;
    }
}

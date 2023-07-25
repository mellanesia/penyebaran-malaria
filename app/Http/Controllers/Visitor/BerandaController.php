<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Models\Kelurahan;
use App\Models\Rw;

class BerandaController extends Controller
{

    public function index()
    {

        $label = Kelurahan::get();
        $grafik = Kelurahan::select('kelurahans.id',  DB::raw('SUM(rws.jumlah_kasus) as total'))
        ->leftJoin('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
        ->groupBy('kelurahans.id')
        ->get();


        return view('visitor.pages.index',compact('grafik','label'));
    }

}

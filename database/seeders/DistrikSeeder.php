<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Distrik;
use Carbon\Carbon;

class DistrikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Distrik::create(
            [

                'nama_distrik' => 'Jayapura Utara',
                'jumlah_penduduk' => '222',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
        
        Distrik::create(
            [

                'nama_distrik' => 'Jayapura Selatan',
                'jumlah_penduduk' => '432',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
        
        Distrik::create(
            [

                'nama_distrik' => 'Abepura',
                'jumlah_penduduk' => '213',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
        
        Distrik::create(
            [

                'nama_distrik' => 'Muara Tami',
                'jumlah_penduduk' => '234',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
        
        Distrik::create(
            [

                'nama_distrik' => 'Heram',
                'jumlah_penduduk' => '123',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
    }
}

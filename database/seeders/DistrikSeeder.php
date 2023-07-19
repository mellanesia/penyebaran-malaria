<?php

namespace Database\Seeders;

use App\Models\Distrik;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

                'nama_distrik' => 'Gurabesi',
                'jumlah_penduduk' => '123',
                'status' => 'Publish',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
        
        Distrik::create(
            [

                'nama_distrik' => 'Bayangkara (Bhayangkara)',
                'jumlah_penduduk' => '123',
                'status' => 'Publish',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
        
        Distrik::create(
            [

                'nama_distrik' => 'Trikora',
                'jumlah_penduduk' => '123',
                'status' => 'Publish',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
    }
}

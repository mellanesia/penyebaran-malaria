<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rw;
use Carbon\Carbon;

class RwSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Kelurahan A
        Rw::create(
            [
                'nama_rw' => '01',
                'id_kelurahan' => 1, // Angkasapura
                'jumlah_kasus' => '10',
                'latitude' => '-2.490725', // -2.490725, 140.654776
                'longitude' => '140.654776',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '02',
                'id_kelurahan' => 1, // Angkasapura
                'jumlah_kasus' => '30',
                'latitude' => '-2.506073', // -2.506073, 140.695547
                'longitude' => '140.695547',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
        
        // Kelurahan B
        Rw::create(
            [
                'nama_rw' => '01',
                'id_kelurahan' => 2, // Bayangkara
                'jumlah_kasus' => '10',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '02',
                'id_kelurahan' => 2, // Bayangkara
                'jumlah_kasus' => '30',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        // Kelurahan C
        Rw::create(
            [
                'nama_rw' => '01',
                'id_kelurahan' => 3, // Gurabesi
                'jumlah_kasus' => '10',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '02',
                'id_kelurahan' => 3, // Gurabesi
                'jumlah_kasus' => '30',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '03',
                'id_kelurahan' => 3, // Gurabesi
                'jumlah_kasus' => '30',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
    }
}

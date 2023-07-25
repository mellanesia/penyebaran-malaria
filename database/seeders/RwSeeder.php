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

        // Kelurahan D
        Rw::create(
            [
                'nama_rw' => '01',
                'id_kelurahan' => 4, // Gurabesi
                'jumlah_kasus' => '6',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '02',
                'id_kelurahan' => 4, // Gurabesi
                'jumlah_kasus' => '5',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '03',
                'id_kelurahan' => 4, // Gurabesi
                'jumlah_kasus' => '25',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        // Kelurahan E
        Rw::create(
            [
                'nama_rw' => '01',
                'id_kelurahan' => 5, // Gurabesi
                'jumlah_kasus' => '6',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '02',
                'id_kelurahan' => 5, // Gurabesi
                'jumlah_kasus' => '5',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '03',
                'id_kelurahan' => 5, // Gurabesi
                'jumlah_kasus' => '50',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );


        // Kelurahan F
        Rw::create(
            [
                'nama_rw' => '01',
                'id_kelurahan' => 6, // Gurabesi
                'jumlah_kasus' => '11',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '02',
                'id_kelurahan' => 6, // Gurabesi
                'jumlah_kasus' => '18',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '03',
                'id_kelurahan' => 6, // Gurabesi
                'jumlah_kasus' => '18',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );


        // Kelurahan G
        Rw::create(
            [
                'nama_rw' => '01',
                'id_kelurahan' => 7, // Gurabesi
                'jumlah_kasus' => '5',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '02',
                'id_kelurahan' => 7, // Gurabesi
                'jumlah_kasus' => '15',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '03',
                'id_kelurahan' => 7, // Gurabesi
                'jumlah_kasus' => '13',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        


        // Kelurahan H
        Rw::create(
            [
                'nama_rw' => '01',
                'id_kelurahan' => 8, // Gurabesi
                'jumlah_kasus' => '11',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '02',
                'id_kelurahan' => 8, // Gurabesi
                'jumlah_kasus' => '18',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '03',
                'id_kelurahan' => 8, // Gurabesi
                'jumlah_kasus' => '24',
                'latitude' => '',
                'longitude' => '',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
    }
}

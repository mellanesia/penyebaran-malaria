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
                'id_kelurahan' => 1,
                'jumlah_kasus' => '10',
                'latitude' => '-2.5014589',
                'longitude' => '140.695693,13',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '02',
                'id_kelurahan' => 1,
                'jumlah_kasus' => '30',
                'latitude' => '-2.5666345',
                'longitude' => '140.7008717',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
        
        // Kelurahan B
        Rw::create(
            [
                'nama_rw' => '01',
                'id_kelurahan' => 2,
                'jumlah_kasus' => '10',
                'latitude' => '-2.5014589',
                'longitude' => '140.695693,13',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '02',
                'id_kelurahan' => 2,
                'jumlah_kasus' => '30',
                'latitude' => '-2.5666345',
                'longitude' => '140.7008717',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        // Kelurahan C
        Rw::create(
            [
                'nama_rw' => '01',
                'id_kelurahan' => 3,
                'jumlah_kasus' => '10',
                'latitude' => '-2.5014589',
                'longitude' => '140.695693,13',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '02',
                'id_kelurahan' => 3,
                'jumlah_kasus' => '30',
                'latitude' => '-2.5666345',
                'longitude' => '140.7008717',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => '03',
                'id_kelurahan' => 3,
                'jumlah_kasus' => '30',
                'latitude' => '-2.5666345',
                'longitude' => '140.7008717',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\Rw;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RwSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rw::create(
            [
                'nama_rw' => 'RW 01',
                'kepala_rw' => 'Pace',
                'jumlah_penduduk' => '77',
                'jumlah_kasus' => '10',
                'google_map_embed_script' => 'https://goo.gl/maps/znMhYaz9uKhhLqRz5',
                'latitude' => '-2.5014589',
                'longitude' => '140.695693,13',
                'status' => 'Publish',
                'id_kelurahan' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Rw::create(
            [
                'nama_rw' => 'RW 02',
                'kepala_rw' => 'Mace',
                'jumlah_penduduk' => '95',
                'jumlah_kasus' => '30',
                'google_map_embed_script' => 'https://goo.gl/maps/znMhYaz9uKhhLqRz5',
                'latitude' => '-2.5666345',
                'longitude' => '140.7008717',
                'status' => 'Publish',
                'id_kelurahan' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
    }
}

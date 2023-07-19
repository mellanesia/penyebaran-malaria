<?php

namespace Database\Seeders;

use App\Models\Kelurahan;
use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Kelurahan::create(
            [
                'nama_kelurahan' => 'Hamadi',
                'kepala_kelurahan' => 'Pace',
                'jumlah_penduduk' => '12',
                'google_map_embed_script' => 'https://goo.gl/maps/znMhYaz9uKhhLqRz5',
                'latitude' => '-2.5673628,',
                'longitude' => '140.6922867,15',
                'status' => 'Publish',
                'id_distrik' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]
        );

        Kelurahan::create(
            [
                'nama_kelurahan' => 'Tanjung Ria',
                'kepala_kelurahan' => 'Mace',
                'jumlah_penduduk' => '21',
                'google_map_embed_script' => 'https://goo.gl/maps/znMhYaz9uKhhLqRz5',
                'latitude' => '-2.565069',
                'longitude' => '140.694647',
                'status' => 'Publish',
                'id_distrik' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelurahan;
use Carbon\Carbon;

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
                'nama_kelurahan' => 'Angkasapura',
                'jumlah_penduduk' => '455',
                'latitude' => '',
                'longitude' => '',
                
                'id_distrik' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]
        );

        Kelurahan::create(
            [
                'nama_kelurahan' => 'Bayangkara',
                'jumlah_penduduk' => '653',
                'latitude' => '',
                'longitude' => '',

                'id_distrik' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Kelurahan::create(
            [
                'nama_kelurahan' => 'Gurabesi',
                'jumlah_penduduk' => '365',
                'latitude' => '',
                'longitude' => '',

                'id_distrik' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Kelurahan::create(
            [
                'nama_kelurahan' => 'Imbi',
                'jumlah_penduduk' => '400',
                'latitude' => '',
                'longitude' => '',

                'id_distrik' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Kelurahan::create(
            [
                'nama_kelurahan' => 'Mandala',
                'jumlah_penduduk' => '251',
                'latitude' => '',
                'longitude' => '',
                
                'id_distrik' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Kelurahan::create(
            [
                'nama_kelurahan' => 'Tanjung Ria',
                'jumlah_penduduk' => '700',
                'latitude' => '',
                'longitude' => '',

                'id_distrik' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Kelurahan::create(
            [
                'nama_kelurahan' => 'Trikora',
                'jumlah_penduduk' => '600',
                'latitude' => '',
                'longitude' => '',

                'id_distrik' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Kelurahan::create(
            [
                'nama_kelurahan' => 'Kayo Batu',
                'jumlah_penduduk' => '500',
                'latitude' => '',
                'longitude' => '',

                'id_distrik' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
    }
}

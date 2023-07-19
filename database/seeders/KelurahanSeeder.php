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
                'id' => 1,
                'nama_kelurahan' => 'Angkasapura',
                'jumlah_penduduk' => '455',
                'latitude' => '-2.5043588',
                'longitude' => '140.6622865',
                
                'id_distrik' => 1, // Jayapura Utara
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]
        );

        Kelurahan::create(
            [
                'id' => 2,
                'nama_kelurahan' => 'Bayangkara',
                'jumlah_penduduk' => '653',
                'latitude' => '-2.5154463',
                'longitude' => '140.6570469',

                'id_distrik' => 1, // Jayapura Utara
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Kelurahan::create(
            [
                'id' => 3,
                'nama_kelurahan' => 'Gurabesi',
                'jumlah_penduduk' => '365',
                'latitude' => '-2.5273108',
                'longitude' => '140.649413',

                'id_distrik' => 1, // Jayapura Utara
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Kelurahan::create(
            [
                'id' => 5,
                'nama_kelurahan' => 'Imbi',
                'jumlah_penduduk' => '400',
                'latitude' => '-2.5183564',
                'longitude' => '140.7183055',

                'id_distrik' => 1, // Jayapura Utara
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Kelurahan::create(
            [
                'id' => 6,
                'nama_kelurahan' => 'Mandala',
                'jumlah_penduduk' => '251',
                'latitude' => '-2.5323015',
                'longitude' => '140.7133279',
                
                'id_distrik' => 1, // Jayapura Utara
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Kelurahan::create(
            [
                'id' => 7,
                'nama_kelurahan' => 'Tanjung Ria',
                'jumlah_penduduk' => '700',
                'latitude' => '-2.5014588',
                'longitude' => '140.6750505',

                'id_distrik' => 1, // Jayapura Utara
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Kelurahan::create(
            [
                'id' => 8,
                'nama_kelurahan' => 'Trikora',
                'jumlah_penduduk' => '600',
                'latitude' => '-2.5256835',
                'longitude' => '140.7123684',

                'id_distrik' => 1, // Jayapura Utara
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );

        Kelurahan::create(
            [
                'id' => 9,
                'nama_kelurahan' => 'Kayo Batu',
                'jumlah_penduduk' => '500',
                'latitude' => '-2.5318645',
                'longitude' => '140.736917',

                'id_distrik' => 1, // Jayapura Utara
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]
        );
    }
}

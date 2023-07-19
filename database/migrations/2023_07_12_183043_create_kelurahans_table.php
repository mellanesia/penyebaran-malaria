<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelurahans', function (Blueprint $table) {
            $table->id();

            $table->string('nama_kelurahan')->nullable();
            $table->text('kepala_kelurahan')->nullable();
            $table->text('jumlah_penduduk')->nullable();
            $table->text('google_map_embed_script')->nullable();
            $table->text('latitude')->nullable();
            $table->text('Longitude')->nullable();

            $table->enum('status',['Publish','Draft'])->default('Publish')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelurahans');
    }
};

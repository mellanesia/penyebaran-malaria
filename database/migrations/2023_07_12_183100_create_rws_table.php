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
        Schema::create('rws', function (Blueprint $table) {
            $table->id();

            $table->string('nama_rw')->nullable();
            $table->text('kepala_rw')->nullable();
            $table->text('jumlah_penduduk')->nullable();
            $table->text('jumlah_kasus')->nullable();
            $table->text('google_map_embed_script')->nullable();
            $table->text('latitude')->nullable();
            $table->text('longitude')->nullable();
            $table->enum('status',['Publish','Draft'])->default('Publish')->nullable();
            $table->foreignId('id_kelurahan')->constrained('kelurahans')->cascadeOnDelete();
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
        Schema::dropIfExists('rws');
    }
};

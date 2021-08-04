<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanIjinKeramaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_ijin_keramaian', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('pemohon_id');
            $table->dateTime('waktu_kegiatan');
            $table->integer('durasi_kegiatan');
            $table->text('bentuk_kegiatan');
            $table->integer('jumlah_peserta');
            $table->text('rangkaian_kegiatan');
            $table->text('penanggung_nama');
            $table->string('penganggung_telp');
            $table->bigInteger('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permohonan_ijin_keramaian');
    }
}

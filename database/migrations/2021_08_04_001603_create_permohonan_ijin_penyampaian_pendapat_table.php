<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanIjinPenyampaianPendapatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_ijin_penyampaian_pendapat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pemohon_id');
            $table->dateTime('waktu_kegiatan');
            $table->integer('durasi_kegiatan');
            $table->text('bentuk_kegiatan');
            $table->integer('jumlah_peserta');
            $table->text('rangkaian_kegiatan');
            $table->text('penanggung_nama');
            $table->string('penanggung_telp');
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
        Schema::dropIfExists('permohonan_ijin_penyampaian_pendapat');
    }
}

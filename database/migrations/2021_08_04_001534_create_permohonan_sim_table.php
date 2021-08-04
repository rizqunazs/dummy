<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanSimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_sim', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pemohon_id');
            $table->bigInteger('jenis_permohonan_id');
            $table->bigInteger('golongan_sim_id');
            $table->bigInteger('pendidikan_id');
            $table->bigInteger('golongan_darah_id');
            $table->integer('tinggi_badan');
            $table->text('kacamata')->nullable();
            $table->text('cacat_fisik')->nullable();
            $table->string('kontak_darurat_nama');
            $table->text('kontak_darurat_alamat');
            $table->string('kontak_darurat_no_telp');
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
        Schema::dropIfExists('permohonan_sim');
    }
}

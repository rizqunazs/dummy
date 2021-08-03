<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objek', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori', ['Bergerak', 'Tidak Bergerak']);
            $table->unsignedBigInteger('id_project');
            $table->unsignedBigInteger('id_kendaraan')->nullable();
            $table->string('atas_nama')->nullable();
            $table->string('nomor_id')->nullable();
            $table->string('merk_kendaraan')->nullable();
            $table->string('no_rangka')->nullable();
            $table->string('no_mesin')->nullable();
            $table->string('tahun_keluaran')->nullable();
            $table->string('warna')->nullable();
            $table->string('keterangan')->nullable();
            $table->unsignedBigInteger('id_sertifikat')->nullable();
            $table->enum('wilayah_kerja', ['Dalam Wilayah', 'Luar Wilayah'])->nullable();
            $table->string('kota')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('luas_tanah')->nullable();
            $table->string('luas_bangunan')->nullable();
            $table->string('njop')->nullable();
            $table->string('nib')->nullable();
            $table->string('nop')->nullable();
            $table->timestamps();


            $table->foreign('id_project')->references('id')->on('project');
            $table->foreign('id_kendaraan')->references('id')->on('jenis_kendaraan');
            $table->foreign('id_sertifikat')->references('id')->on('sertifikat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objek');
    }
}

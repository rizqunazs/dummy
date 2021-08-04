<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan_umum', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pemohon_id');
            $table->text('uraian');
            $table->dateTime('waktu_kejadian');
            $table->text('lokasi_kejadian');
            $table->text('terlapor');
            $table->dateTime('rencana_kedatangan');
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
        Schema::dropIfExists('pengaduan_umum');
    }
}

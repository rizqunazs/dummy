<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktaPpatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akta_ppat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_project');
            $table->date('tanggal_penomoran')->nullable();
            $table->enum('jenis_nomor', ['external', 'internal']);
            $table->string('nomor_id')->nullable();
            $table->unsignedBigInteger('id_jenis_akta_ppat')->nullable();
            $table->string('biaya')->nullable();
            $table->string('harga')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('id_project')->references('id')->on('project');
            $table->foreign('id_jenis_akta_ppat')->references('id')->on('jenis_akta_ppat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akta_ppat');
    }
}

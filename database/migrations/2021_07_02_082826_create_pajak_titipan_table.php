<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePajakTitipanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pajak_titipan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_project');
            $table->unsignedBigInteger('id_jenis_estimasi');
            $table->string('nomor_id')->nullable();
            $table->string('nilai_esstimasi');
            $table->text('keterangan');
            $table->timestamps();


            $table->foreign('id_project')->references('id')->on('project');
            $table->foreign('id_jenis_estimasi')->references('id')->on('jenis_estimasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pajak_titipan');
    }
}

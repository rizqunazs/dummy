<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKedatanganWnaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kedatangan_wna', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('dari_negara');
            $table->bigInteger('maksud_kunjungan_id');
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
        Schema::dropIfExists('kedatangan_wna');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeberangkatanWnaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keberangkatan_wna', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('negara_tujuan');
            $table->string('kota_di_indonesia');
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
        Schema::dropIfExists('keberangkatan_wna');
    }
}

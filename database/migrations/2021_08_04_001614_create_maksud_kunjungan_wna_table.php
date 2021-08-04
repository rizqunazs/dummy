<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaksudKunjunganWnaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maksud_kunjungan_wna', function (Blueprint $table) {
            $table->id();
            $table->text('nama');
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maksud_kunjungan_wna');
    }
}

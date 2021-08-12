<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatFisikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_fisik', function (Blueprint $table) {
            $table->id();
            $table->text('rambut')->nullable();
            $table->text('wajah')->nullable();
            $table->text('kulit')->nullable();
            $table->text('tanda_istimewa')->nullable();
            $table->text('tinggi_badan')->nullable();
            $table->text('berat_badan')->nullable();
            $table->text('rumus_sidik_jari_kiri')->nullable();
            $table->text('rumus_sidik_jari_kanan')->nullable();
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
        Schema::dropIfExists('riwayat_fisik');
    }
}

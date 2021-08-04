<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanPidanaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_pidana', function (Blueprint $table) {
            $table->id();
            $table->text('perkara')->nullable();
            $table->text('putusan_hakim')->nullable();
            $table->text('sedang_perkara')->nullable();
            $table->text('proses_hukum')->nullable();
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
        Schema::dropIfExists('catatan_pidana');
    }
}

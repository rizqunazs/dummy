<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jenis_form');
            $table->string('nilai_transaksi');
            $table->string('nilai_ht')->nullable();
            $table->string('plafond_hutang')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('kota')->nullable();
            $table->string('nama_direktur')->nullable();
            $table->string('modal_dasar')->nullable();
            $table->string('badan_ajuan')->nullable();
            $table->string('pendiri')->nullable();
            $table->string('badan_disetujui')->nullable();
            $table->string('notaris_partner')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_jenis_form')->references('id')->on('jenis_form');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemohonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemohon', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik_ektp');
            $table->string('fullname');
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->bigInteger('pekerjaan_id');
            $table->bigInteger('agama_id');
            $table->text('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->bigInteger('status_kawin')->nullable();
            $table->string('kebangsaan')->nullable();
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
        Schema::dropIfExists('pemohon');
    }
}

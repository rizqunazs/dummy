<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanDataWnaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_data_wna', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pemohon_id');
            $table->string('fullname');
            $table->text('alamat')->nullable();
            $table->string('kebangsaan');
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->bigInteger('pekerjaan_id')->nullable();
            $table->string('no_pasport');
            $table->string('passport_oleh')->nullable();
            $table->bigInteger('jenis_visa_id')->nullable();
            $table->bigInteger('data_kedatangan_id')->nullable();
            $table->bigInteger('data_keberangkatan_id')->nullable();
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
        Schema::dropIfExists('laporan_data_wna');
    }
}

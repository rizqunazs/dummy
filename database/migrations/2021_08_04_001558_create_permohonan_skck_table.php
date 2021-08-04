<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanSkckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_skck', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pemohon_id');
            $table->text('keperluan');
            $table->bigInteger('data_keluarga_id');
            $table->bigInteger('catatan_pidana_id')->nullable();
            $table->bigInteger('catatan_pelanggaran_id')->nullable();
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
        Schema::dropIfExists('permohonan_skck');
    }
}

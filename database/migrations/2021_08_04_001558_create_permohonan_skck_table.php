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
            $table->bigInteger('keperluan_skck_id');
            $table->text('keperluan_keterangan_tambahan')->nullable();
            $table->bigInteger('data_keluarga_id');
            $table->bigInteger('riwayat_pendidikan_id');
            $table->bigInteger('catatan_pidana_id')->nullable();
            $table->bigInteger('catatan_pelanggaran_id')->nullable();
            $table->text('riwayat_kunjungan')->nullable();
            $table->text('hobi')->nullable();
            $table->text('yang_bisa_dihubungi')->nullable();
            $table->text('sponsor_nama')->nullable();
            $table->text('sponsor_alamat')->nullable();
            $table->text('sponsor_telp')->nullable();
            $table->text('sponsor_jenis_usaha')->nullable();
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

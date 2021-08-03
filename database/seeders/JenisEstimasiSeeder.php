<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisEstimasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis = [
            [
                'name' => 'BPHTB HIBAH',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'BPHTB WARIS',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'BPHTB PEMBELI (SSB)',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Pajak Penjual (SSP)',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'PNBP Waris',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'PNBP Balik Nama',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'PNBP APHB',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'PPH Waris',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'PPH Hibah',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Bayar PBB Tahun Berjalan',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Bayar Tunggakan PBB',
                'created_at' => \Carbon\Carbon::now(),
            ],
        ];
        DB::table('jenis_estimasi')->insert($jenis);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisAktaPPATSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenisppat = [
            [
                'name' => 'Akta APHB',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta APHT',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta HIBAH',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta JUAL BELI',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta Tukar Menukar',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta SKMHT',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta Pemasukan Kedalam Perusahaan',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta Pemberian hak guna bangunan / hak pakai diatas tanah hak milik',
                'created_at' => \Carbon\Carbon::now(),
            ]
        ];
        DB::table('jenis_akta_ppat')->insert($jenisppat);
    }
}

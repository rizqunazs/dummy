<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisAktaNotarilSeeder extends Seeder
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
                'name' => 'AKta SKMHT',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta SKMHT 1 Bulan',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta SKMHT 3 Bulan',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta Addendum & Deplesi Kredit',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta Addendum Perjanjian Kredit',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta Addendum Perjanjian Restrukturisasi Kredit',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta Addendum Perpanjangan & Deplesi Kredit',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta Addendum Perpanjangan & Suplesi Kredit',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta Addendum Perpanjangan PK',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Akta Addendum Perubahan PK',
                'created_at' => \Carbon\Carbon::now(),
            ],
        ];
        DB::table('jenis_akta_notaril')->insert($jenis);
    }
}

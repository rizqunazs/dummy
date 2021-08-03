<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisKendaraanSeeder extends Seeder
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
                'name' => 'Roda Dua',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Roda Empat',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Roda lebih dari Empat',
                'created_at' => \Carbon\Carbon::now(),
            ],
        ];
        DB::table('jenis_kendaraan')->insert($jenis);
    }
}

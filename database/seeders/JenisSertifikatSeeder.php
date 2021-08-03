<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSertifikatSeeder extends Seeder
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
                'name' => 'SHM',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'SHGB',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'HGB INDUK',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'GIRIK',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'HAK GUNA PAKAI',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'HMRS',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'SERTIFIKAT PERSEWAAN HAK GUNA USAHA',
                'created_at' => \Carbon\Carbon::now(),
            ],
        ];
        DB::table('sertifikat')->insert($jenis);
    }
}

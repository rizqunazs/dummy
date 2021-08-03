<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisFormSeeder extends Seeder
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
                'name' => 'Umum',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'BUMN',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Swasta',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Konvensional',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Mikro',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Badan Hukum',
                'created_at' => \Carbon\Carbon::now(),
            ], [
                'name' => 'Partner Notaris',
                'created_at' => \Carbon\Carbon::now(),
            ],
        ];
        DB::table('jenis_form')->insert($jenis);
    }
}

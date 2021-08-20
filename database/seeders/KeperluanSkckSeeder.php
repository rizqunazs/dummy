<?php

namespace Database\Seeders;

use App\Models\KeperluanSKCK;
use Illuminate\Database\Seeder;

class KeperluanSkckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keperluans = [
            "POLRES - PENCALONAN ANGGOTA LEGISLATIF TINGKAT KABUPATEN/KOTA",
            "POLRES - MELAMAR SEBAGAI PNS",
            "POLRES - MELAMAR SEBAGAI ANGGOTA TNI/POLRI",
            "POLRES - PENCALONAN PEJABAT PUBLIK",
            "POLRES - KEPEMILIKAN SENJATA API",
            "POLRES - MELAMAR PEKERJAAN SWASTA DAN BUMN DI TINGKAT KABUPATEN/KOTA",
            "POLRES - PENCALONAN KEPALA DAERAH TINGKAT KABUPATEN/KOTA",
            "POLSEK - MELAMAR PEKERJAAN SWASTA DI TINGKAT KECAMATAN",
            "POLSEK - PENCALONAN KEPALA DESA",
            "POLSEK - PENCALONAN SEKERTARIS DESA DAN APARATUR DESA",
            "POLSEK - PINDAH ALAMAT",
            "POLSEK - MELANJUTKAN PENDIDIKAN LINGKUP KECAMATAN",
            "POLRES - PASS BANDARA SOETTA",
            "POLSEK - KEPERLUAN LAIN DI TINGKAT KECAMATAN",
            "POLRES - MELANJUTKAN PENDIDIKAN KEDINASAN DAN DI LUAR KABUPATEN/KOTA",
            "POLRES - CALON PENERIMA PENGHARGAAN",
            "POLRES - KEPERLUAN LAIN DI TINGKAT KABUPATEN",
            "Lainnya"
        ];

        foreach ($keperluans as $keperluan) :
            KeperluanSKCK::firstOrCreate([
                'nama' => $keperluan
            ]);
        endforeach;
    }
}

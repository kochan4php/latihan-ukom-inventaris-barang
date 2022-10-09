<?php

namespace Database\Seeders;

use App\Models\SumberDana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SumberDanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sumberDana = collect([
            [
                'id_sumber' => 'S001',
                'nama_sumber' => 'Komite 07/09',
                'keterangan' => 'Bantuan Komite 2007/2009',
            ],
            [
                'id_sumber' => 'S002',
                'nama_sumber' => 'Komite 13',
                'keterangan' => 'Bantuan Komite 2013',
            ],
            [
                'id_sumber' => 'S003',
                'nama_sumber' => 'Sed t-vet',
                'keterangan' => 'Bantuan Kerja Sama Indonesia Jerman',
            ],
            [
                'id_sumber' => 'S004',
                'nama_sumber' => 'BOPD 2020',
                'keterangan' => 'Bantuan Provinsi Jawa Barat 2020',
            ],
            [
                'id_sumber' => 'S005',
                'nama_sumber' => 'BOSDA 2018',
                'keterangan' => 'Bantuan Operasional Sekolah Daerah Jawa Barat 2018',
            ],
        ]);

        $sumberDana->each(fn ($sd) => DB::table('sumber_dana')->insert($sd));
    }
}

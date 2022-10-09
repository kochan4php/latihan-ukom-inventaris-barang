<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangKeluar = collect([
            [
                'id_barang' => 'BRG20001',
                'tgl_keluar' => date('2017-11-06'),
                'jml_keluar' => 3,
                'supplier' => 'SPR005',
            ],
            [
                'id_barang' => 'BRG10001',
                'tgl_keluar' => date("2020-11-03"),
                'jml_keluar' => 16,
                'supplier' => 'SPR001',
            ],
        ]);

        $barangKeluar->each(fn ($bk) => DB::table('barang_keluar')->insert($bk));
    }
}

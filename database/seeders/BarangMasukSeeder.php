<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangMasuk = collect([
            [
                'id_barang' => 'BRG10001',
                'tgl_masuk' => date('2007-08-03'),
                'jml_masuk' => 36,
                'supplier' => 'SPR001',
            ],
            [
                'id_barang' => 'BRG10002',
                'tgl_masuk' => date('2007-08-01'),
                'jml_masuk' => 36,
                'supplier' => 'SPR002',
            ],
            [
                'id_barang' => 'BRG20001',
                'tgl_masuk' => date('2013-07-09'),
                'jml_masuk' => 30,
                'supplier' => 'SPR004',
            ],
            [
                'id_barang' => 'BRG20002',
                'tgl_masuk' => date('2014-03-08'),
                'jml_masuk' => 23,
                'supplier' => 'SPR003',
            ],
            [
                'id_barang' => 'BRG20003',
                'tgl_masuk' => date('2020-11-10'),
                'jml_masuk' => 12,
                'supplier' => 'SPR004',
            ],
            [
                'id_barang' => 'BRG20004',
                'tgl_masuk' => date('2014-04-13'),
                'jml_masuk' => 16,
                'supplier' => 'SPR005',
            ],
            [
                'id_barang' => 'BRG30001',
                'tgl_masuk' => date('2018-04-06'),
                'jml_masuk' => 2,
                'supplier' => 'SPR005',
            ],
            [
                'id_barang' => 'BRG30002',
                'tgl_masuk' => date('2018-04-06'),
                'jml_masuk' => 4,
                'supplier' => 'SPR005',
            ],
        ]);

        $barangMasuk->each(fn ($bm) => DB::table('barang_masuk')->insert($bm));
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stok = collect([
            [
                'id_barang' => 'BRG10001',
                'jml_masuk' => 36,
                'jml_keluar' => 0,
                'total_barang' => 36,
            ],
            [
                'id_barang' => 'BRG10002',
                'jml_masuk' => 36,
                'jml_keluar' => 16,
                'total_barang' => 20,
            ],
            [
                'id_barang' => 'BRG20001',
                'jml_masuk' => 30,
                'jml_keluar' => 3,
                'total_barang' => 27,
            ],
            [
                'id_barang' => 'BRG20002',
                'jml_masuk' => 23,
                'jml_keluar' => 0,
                'total_barang' => 23,
            ],
            [
                'id_barang' => 'BRG20003',
                'jml_masuk' => 12,
                'jml_keluar' => 0,
                'total_barang' => 12,
            ],
            [
                'id_barang' => 'BRG20004',
                'jml_masuk' => 16,
                'jml_keluar' => 0,
                'total_barang' => 16,
            ],
            [
                'id_barang' => 'BRG30001',
                'jml_masuk' => 2,
                'jml_keluar' => 0,
                'total_barang' => 2,
            ],
            [
                'id_barang' => 'BRG30002',
                'jml_masuk' => 4,
                'jml_keluar' => 0,
                'total_barang' => 4,
            ],
        ]);

        $stok->each(fn ($stk) => DB::table('stok')->insert($stk));
    }
}

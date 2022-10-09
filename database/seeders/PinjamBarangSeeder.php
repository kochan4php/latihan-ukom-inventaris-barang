<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinjamBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pinjamBarang = collect([
            [
                'peminjam' => 'USR20001',
                'tgl_pinjam' => date("2021-06-09"),
                'barang_pinjam' => 'BRG20002',
                'jml_pinjam' => 1,
                'tgl_kembali' => date("2021-06-23"),
                'kondisi' => 'Baik',
            ],
            [
                'peminjam' => 'USR20002',
                'tgl_pinjam' => date("2021-06-09"),
                'barang_pinjam' => 'BRG20002',
                'jml_pinjam' => 1,
                'tgl_kembali' => date("2021-06-09"),
                'kondisi' => 'Baik',
            ],
            [
                'peminjam' => 'USR20004',
                'tgl_pinjam' => date("2021-08-05"),
                'barang_pinjam' => 'BRG20004',
                'jml_pinjam' => 3,
                'tgl_kembali' => date("2021-08-21"),
                'kondisi' => 'Baik',
            ],
            [
                'peminjam' => 'USR20004',
                'tgl_pinjam' => date("2021-08-05"),
                'barang_pinjam' => 'BRG30002',
                'jml_pinjam' => 3,
                'tgl_kembali' => date("2021-08-05"),
                'kondisi' => 'Baik',
            ],
        ]);

        $pinjamBarang->each(fn ($pb) => DB::table('pinjam_barang')->insert($pb));
    }
}

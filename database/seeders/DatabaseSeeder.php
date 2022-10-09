<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Barang;
use App\Models\BarangMasuk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LevelUserSeeder::class,
            SumberDanaSeeder::class,
            LokasiSeeder::class,
            UserSeeder::class,
            BarangSeeder::class,
            SupplierSeeder::class,
            PinjamBarangSeeder::class,
            BarangMasukSeeder::class,
            BarangKeluarSeeder::class,
            StokSeeder::class
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\LevelUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levelUsers = collect([
            [
                'id_level' => 'U01',
                'nama' => 'Administrator'
            ],
            [
                'id_level' => 'U02',
                'nama' => 'Manajemen'
            ],
            [
                'id_level' => 'U03',
                'nama' => 'Peminjam'
            ],
        ]);

        $levelUsers->each(fn ($levelUser) => DB::table('level_user')->insert($levelUser));
    }
}

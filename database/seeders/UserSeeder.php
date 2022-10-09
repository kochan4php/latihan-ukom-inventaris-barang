<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = collect([
            [
                'id_user' => 'USR00001',
                'nama' => 'Nana Sukmana',
                'username' => 'admin',
                'email' => 'nana@gmail.com',
                'password' => bcrypt('password'),
                'level' => 'U01'
            ],
            [
                'id_user' => 'USR00002',
                'nama' => 'Deden Deendi',
                'username' => 'toolman=RPL',
                'email' => 'deden@gmail.com',
                'password' => bcrypt('password'),
                'level' => 'U02'
            ],
            [
                'id_user' => 'USR00003',
                'nama' => 'Ilham Kamil',
                'username' => 'toolman=MM',
                'email' => 'ilham@gmail.com',
                'password' => bcrypt('password'),
                'level' => 'U02'
            ],
            [
                'id_user' => 'USR00004',
                'nama' => 'Abdul Rahman',
                'username' => 'toolman=TKJ',
                'email' => 'abdul@gmail.com',
                'password' => bcrypt('password'),
                'level' => 'U02'
            ],
            [
                'id_user' => 'USR20001',
                'nama' => 'Dzaki',
                'username' => 'dzaki',
                'email' => 'dzaki@gmail.com',
                'password' => bcrypt('password'),
                'level' => 'U03'
            ],
            [
                'id_user' => 'USR20002',
                'nama' => 'Sulthan',
                'username' => 'Sulthan',
                'email' => 'sulthan@gmail.com',
                'password' => bcrypt('password'),
                'level' => 'U03'
            ],
            [
                'id_user' => 'USR20003',
                'nama' => 'Fahru',
                'username' => 'fahru',
                'email' => 'fahru@gmail.com',
                'password' => bcrypt('password'),
                'level' => 'U03'
            ],
            [
                'id_user' => 'USR20004',
                'nama' => 'Akwan',
                'username' => 'akwan',
                'email' => 'akwan@gmail.com',
                'password' => bcrypt('password'),
                'level' => 'U03'
            ],
        ]);

        $users->each(fn ($user) => DB::table('user')->insert($user));
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'first_name' => 'Sample',
                'last_name' => 'Dosen 1',
                'username' => 'dosen1',
                'email' => 'dosen1@gmail.com',
                'password' => bcrypt('dosen123')
            ],
            [
                'first_name' => 'Sample',
                'last_name' => 'Dosen 2',
                'username' => 'dosen2',
                'email' => 'dosen2@gmail.com',
                'password' => bcrypt('dosen123')
            ],
            [
                'first_name' => 'Sample',
                'last_name' => 'Dosen 3',
                'username' => 'dosen3',
                'email' => 'dosen3@gmail.com',
                'password' => bcrypt('dosen123')
            ],
        ];

        DB::table('users')->insert($data);
    }
}

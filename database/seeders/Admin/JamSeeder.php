<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('jam')->insert([
            ['jam' => '07'],
            ['jam' => 'selasa'],
            ['jam' => 'rabu'],
            ['jam' => 'kamis'],
            ['jam' => 'jumat'],
        ]);
    }
}

<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('hari')->insert([
            ['name' => 'senin'],
            ['name' => 'selasa'],
            ['name' => 'rabu'],
            ['name' => 'kamis'],
            ['name' => 'jumat'],
        ]);
    }
}

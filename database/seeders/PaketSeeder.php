<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pakets')->insert([
            'nama_paket' => 'Day 1',
            'harga' => 25000
        ]);

        DB::table('pakets')->insert([
            'nama_paket' => 'Day 2',
            'harga' => 25000
        ]);

        DB::table('pakets')->insert([
            'nama_paket' => 'Day 3',
            'harga' => 40000
        ]);

        DB::table('pakets')->insert([
            'nama_paket' => 'Special Price',
            'harga' => 50000
        ]);
    }
}

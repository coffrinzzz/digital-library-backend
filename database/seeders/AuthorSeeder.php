<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'Tere Liye', 'biografi' => 'Penulis novel best-seller Indonesia asal Sumatra Selatan', 'tgl_lahir' => '1979-05-21'],
            ['name' => 'Andrea Hirata', 'biografi' => 'Penulis novel Laskar Pelangi asal Pulau Belitung', 'tgl_lahir' => '1967-10-24'],
        ]);
    }
}

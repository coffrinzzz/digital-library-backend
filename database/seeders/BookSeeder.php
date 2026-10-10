<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Bumi', 'author_id' => 1, 'publisher_id' => 1, 'kategori' => 'Fiksi Fantasi', 'isbn' => '978-602-123-1', 'tahun_terbit' => 2014, 'stok' => 15],
            ['title' => 'Laskar Pelangi', 'author_id' => 2, 'publisher_id' => 2, 'kategori' => 'Novel Inspiratif', 'isbn' => '978-602-123-2', 'tahun_terbit' => 2005, 'stok' => 20],
        ]);
    }
}

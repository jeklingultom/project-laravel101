<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'nama_kategori' => 'Pakaian Wanita',
        ]);
        Kategori::create([
            'nama_kategori' => 'Aksesori',
        ]);
        Kategori::create([
            'nama_kategori' => 'Sneakers',
        ]);
        Kategori::create([
            'nama_kategori' => 'Tas',
        ]);
        Kategori::create([
            'nama_kategori' => 'Pakaian Pria',
        ]);
    }
}

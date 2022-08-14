<?php

namespace Database\Seeders;

use App\Models\yemek;
use App\Models\yemek_kategori;
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
        $this->call(YemekKategoriSeeder::class);
        $this->call(YemekSeeder::class);
        
    }
}

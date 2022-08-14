<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YemekKategoriSeeder extends Seeder
{
    /*
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate yerine delete kullansaydık veritabanındaki idler 1 den başlamazdı
        DB::table('yemek_kategori')->delete();

        $initial[]=[
            'id'=>1,
            'yemek_kategori_ad'   => 'Ana Yemek',
            'yemek_kategori_ust'  => 0,
            'yemek_kategori_sira' => 1,             
            'created_at'=>now(),
            'updated_at'=>now(),

        ];
        $initial[]=[
            'id'=>2,
            'yemek_kategori_ad'   => 'Çorbalar',
            'yemek_kategori_ust'  => 0,
            'yemek_kategori_sira' => 2,             
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        $initial[]=[
            'id'=>3,
            'yemek_kategori_ad'   => 'Tatlılar',
            'yemek_kategori_ust'  => 0,
            'yemek_kategori_sira' => 3,             
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        $initial[]=[
            'id'=>4,
            'yemek_kategori_ad'   => 'İçecekler',
            'yemek_kategori_ust'  => 0,
            'yemek_kategori_sira' => 4,             
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        $initial[]=[
            'id'=>5,
            'yemek_kategori_ad'   => 'Sütlü Tatlılar',
            'yemek_kategori_ust'  => 3,
            'yemek_kategori_sira' => 2,             
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        $initial[]=[
            'id'=>6,
            'yemek_kategori_ad'   => 'Ara Sıcaklar',
            'yemek_kategori_ust'  => 1,
            'yemek_kategori_sira' => 2,             
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        
        DB::table('yemek_kategori')->insert($initial);
    }
}

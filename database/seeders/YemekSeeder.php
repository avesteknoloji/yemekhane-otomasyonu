<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YemekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //truncate yerine delete kullansaydık veritabanındaki idler 1 den başlamazdı
         DB::table('yemek')->delete();

         $initial[]=[
             'id'=>1,
             'slug'   => 'kuru-fasulye',
             'yemek_ad'  => 'Kuru Fasülye',
             'yemek_resmi' => '',
             'yemek_fiyat'=>25.00,
             'stok'=>300,
             'yemek_kategori_id'=>1,             
             'created_at'=>now(),
             'updated_at'=>now(),
         ];
         $initial[]=[
            'id'=>2,
            'slug'   => 'etli-nohut',
            'yemek_ad'  => 'Etli Nohut',
            'yemek_resmi' => '',
            'yemek_fiyat'=>35.00,
            'stok'=>300,
            'yemek_kategori_id'=>1,             
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        $initial[]=[
            'id'=>3,
            'slug'   => 'pirinc-pilavi',
            'yemek_ad'  => 'Pirinç Pilavı',
            'yemek_resmi' => '',
            'yemek_fiyat'=>15.00,
            'stok'=>300,
            'yemek_kategori_id'=>1,             
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        $initial[]=[
            'id'=>4,
            'slug'   => 'mercimek-corbasi',
            'yemek_ad'  => 'Mercimek Çorbası',
            'yemek_resmi' => '',
            'yemek_fiyat'=>15.00,
            'stok'=>300,
            'yemek_kategori_id'=>2,             
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        $initial[]=[
            'id'=>5,
            'slug'   => 'ezogelin-corbasi',
            'yemek_ad'  => 'Ezogelin Çorbası',
            'yemek_resmi' => '',
            'yemek_fiyat'=>15.00,
            'stok'=>300,
            'yemek_kategori_id'=>2,             
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        $initial[]=[
            'id'=>6,
            'slug'   => 'kazandibi',
            'yemek_ad'  => 'Kazandibi',
            'yemek_resmi' => '',
            'yemek_fiyat'=>25.00,
            'stok'=>300,
            'yemek_kategori_id'=>5,             
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        $initial[]=[
            'id'=>7,
            'slug'   => 'fanta',
            'yemek_ad'  => 'Fanta',
            'yemek_resmi' => '',
            'yemek_fiyat'=>10.00,
            'stok'=>300,
            'yemek_kategori_id'=>4,             
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        $initial[]=[
            'id'=>8,
            'slug'   => 'kola',
            'yemek_ad'  => 'Kola',
            'yemek_resmi' => '',
            'yemek_fiyat'=>10.00,
            'stok'=>300,
            'yemek_kategori_id'=>4,             
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
        $initial[]=[
            'id'=>9,
            'slug'   => 'icli-kofte',
            'yemek_ad'  => 'İçli Köfte',
            'yemek_resmi' => '',
            'yemek_fiyat'=>20.00,
            'stok'=>300,
            'yemek_kategori_id'=>6,             
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
         
         DB::table('yemek')->insert($initial);
    }
}

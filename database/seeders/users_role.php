<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class users_role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_role')->delete();

        $initial[]=[
            'user_role_id'=>'GRP001',
            'user_role_name' => 'Öğrenci',            
            'created_at'=>now(),
            'updated_at'=>now(),

        ];

        $initial[]=[
            'user_role_id'=>'GRP002',
            'user_role_name' => 'Öğretmen',            
            'created_at'=>now(),
            'updated_at'=>now(),

        ];

        $initial[]=[
            'user_role_id'=>'GRP003',
            'user_role_name' => 'Çalışan',            
            'created_at'=>now(),
            'updated_at'=>now(),

        ];

        $initial[]=[
            'user_role_id'=>'GRP004',
            'user_role_name' => 'Yönetici',            
            'created_at'=>now(),
            'updated_at'=>now(),

        ];

        $initial[]=[
            'user_role_id'=>'GRP005',
            'user_role_name' => 'Sistem Yönetici',            
            'created_at'=>now(),
            'updated_at'=>now(),

        ];

        DB::table('users_role')->insert($initial);
    }
}

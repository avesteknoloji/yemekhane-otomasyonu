<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $initial[]=[
            'user_name' => 'Sait AYYILDIZ', 
            'user_pass'=>Hash::make('123456'),  
            'user_email'=>'saitayyildiz@gmail.com', 
            'user_role_id'=>5,      
            'created_at'=>now(),
            'updated_at'=>now(),

        ];
        DB::table('users')->insert($initial);
    }
}

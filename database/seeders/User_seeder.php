<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        //
        DB::table('users')->insert([

        'name'=>'Rockrita',
        'email'=>'Rockrita@gmail.com',
        'Password'=>Hash::make('12345')

        ]);


    }
}

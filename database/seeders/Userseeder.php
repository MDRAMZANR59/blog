<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
        [
            [
                'name'=>'kamal',
                'email'=>'kamal@gmail.com',
                'password'=>Hash::make('123'),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'jamal',
                'email'=>'jamal@gmail.com',
                'password'=>Hash::make('123'),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            ]
        );
    }
}

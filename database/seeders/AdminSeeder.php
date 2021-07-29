<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Leonardo Wijaya',
            'email'=> 'leonardo.wijaya003@binus.ac.id',
            'password' => Hash::make('admin001'),
        ]);

        DB::table('users')->insert([
            'name'=> 'Ilham Kamfretoz',
            'email'=> 'kaijeifreaktoz@gmail.com',
            'password' => Hash::make('admin002'),
        ]);
    }
}

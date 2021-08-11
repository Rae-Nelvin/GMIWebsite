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
            'name'=> 'Wolvindra Vinzuerio',
            'email'=> 'wolvindra.vinzuerio@gmail.com',
            'password' => Hash::make('admin003'),
        ]);

        DB::table('users')->insert([
            'name'=> 'Reynaldy Pratama',
            'email'=> 'reynaldypratama0822@gmail.com',
            'password' => Hash::make('admin004'),
        ]);
    }
}

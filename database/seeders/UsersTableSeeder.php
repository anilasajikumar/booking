<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
        	'name'=> 'anu',
            'email' => 'anu@gmail.com',
            'password'   => bcrypt('123456'),

        ]);
        \App\Models\User::create([
        	'name'=> 'tinu',
            'email' => 'tinu@gmail.com',
            'password'   => bcrypt('123456'),

        ]);
        \App\Models\User::create([
        	'name'=> 'sanu',
            'email' => 'sanu@gmail.com',
            'password'   => bcrypt('123456'),

        ]);
        \App\Models\User::create([
        	'name'=> 'appu',
            'email' => 'appu@gmail.com',
            'password'   => bcrypt('123456'),

        ]);
        
    }
}

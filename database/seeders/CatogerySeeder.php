<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CatogerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\catogery::create([
        	'catogeries'=> 'Gold'
        ]);
        \App\Models\catogery::create([
        	'catogeries'=> 'Silver'
        ]);
        \App\Models\catogery::create([
        	'catogeries'=> 'Bronze'
        ]);
        \App\Models\catogery::create([
        	'catogeries'=> 'Uncategorised'
        ]);
    }
}

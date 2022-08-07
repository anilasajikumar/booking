<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\day::create([
        	'day'=> 'Sunday'
        ]);
        \App\Models\day::create([
        	'day'=> 'Monday'
        ]);
        \App\Models\day::create([
        	'day'=> 'Tuesday'
        ]);
        \App\Models\day::create([
        	'day'=> 'Wednesday'
        ]);
        \App\Models\day::create([
        	'day'=> 'Thursday'
        ]);
        \App\Models\day::create([
        	'day'=> 'Friday'
        ]);
        \App\Models\day::create([
        	'day'=> 'saturday'
        ]);
    }
}

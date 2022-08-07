<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TimeslotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\timeslot::create([
        	'time'=> '02:00'
        ]);
        \App\Models\timeslot::create([
        	'time'=> '03:00'
        ]);
        \App\Models\timeslot::create([
        	'time'=> '04:00'
        ]);
        \App\Models\timeslot::create([
        	'time'=> '05:00'
        ]);
        \App\Models\timeslot::create([
        	'time'=> '06:00'
        ]);
        \App\Models\timeslot::create([
        	'time'=> '07:00'
        ]);
        \App\Models\timeslot::create([
        	'time'=> '08:00'
        ]);
        \App\Models\timeslot::create([
        	'time'=> '09:00'
        ]);
    }
}

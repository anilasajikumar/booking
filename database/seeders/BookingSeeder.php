<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\booking::create([
        	'userid'=> '1',
            'venueid'=> '1',
            'dayid'=>'2',
            'timeslotid'=>'3',
            'catogeryid'=>'4'
        
        	]);
    }
}

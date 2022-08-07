<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\venue::create([
        	'name'=> 'kozhikode',
            'venuetype' => 'football'

        ]);
        \App\Models\venue::create([
        	'name'=> 'kannur',
            'venuetype' => 'cricket'

        ]);
        \App\Models\venue::create([
        	'name'=> 'ernakulam',
            'venuetype' => 'hockey'

        ]);
        \App\Models\venue::create([
        	'name'=> 'trivandrum',
            'venuetype' => 'Volleyball'

        ]);
        \App\Models\venue::create([
        	'name'=> 'kollam',
            'venuetype' => 'tennis'

        ]);
    }
}

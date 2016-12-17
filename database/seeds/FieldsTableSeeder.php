<?php

use Illuminate\Database\Seeder;

class FieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fields')->insert([
            'id' => 1,
            'name' => 'Beedle Park',
            'directions' => 'From 51 South, take the 837 South exit, ' .
                'in a mile or so turn right onto Walton Rd, then turn' .
                ' left onto State St, then right onto Decker Ave. ' .
                'The entrance to the park is at the end of Decker Ave',
            'lat' => 40.262408,
            'long' => -79.923770,
            'address' => '1400 Decker Ave',
            'city' => 'Jefferson Hills',
            'state' => 'PA',
            'zip' => '15025'
        ]);
    }
}

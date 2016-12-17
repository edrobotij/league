<?php

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seasons')->insert([
            'id' => 1,
            'year' => 2015,
            'name' => '2015 Pittsburgh NABA AAA Season',
            'league_id' => 1,
            'division_id' => 3,
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'id' => 1,
            'home_id' => 1,
            'away_id' => 2,
            'gametime' => '2015-05-03 18:00:00',
            'field_id' => 1,
            'season_id' => 1
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class LeagueColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('league_color')->insert([
            'league_id' => 1,
            'primary_color_id' => 6,
            'secondary_color_id' => 7,
            'tertiary_color_id' => 3
        ]);
    }
}

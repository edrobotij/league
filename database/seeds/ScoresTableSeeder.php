<?php

use Illuminate\Database\Seeder;

class ScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores')->insert([
            [
                'inning_game_id' => 2,
                'team_id' => 1,
                'runs' => 1
            ],
            [
                'inning_game_id' => 11,
                'team_id' => 2,
                'runs' => 1
            ],
            [
                'inning_game_id' => 16,
                'team_id' => 1,
                'runs' => 3
            ]
        ]);
    }
}

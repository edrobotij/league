<?php

use Illuminate\Database\Seeder;

class PositionPlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('position_player')->insert([
            [
                'position_id' => 1,
                'player_id' => 11
            ],
            [
                'position_id' => 2,
                'player_id' => 2
            ],
            [
                'position_id' => 3,
                'player_id' => 1,
            ],
            [
                'position_id' => 7,
                'player_id' => 1
            ],
            [
                'position_id' => 4,
                'player_id' => 7
            ],
            [
                'position_id' => 5,
                'player_id' => 6
            ],
            [
                'position_id' => 5,
                'player_id' => 9
            ],
            [
                'position_id' => 6,
                'player_id' => 3
            ],
            [
                'position_id' => 7,
                'player_id' => 5
            ],
            [
                'position_id' => 8,
                'player_id' => 10
            ],
            [
                'position_id' => 9,
                'player_id' => 8
            ]
        ]);
    }
}

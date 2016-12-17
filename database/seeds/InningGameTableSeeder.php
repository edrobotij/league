<?php

use Illuminate\Database\Seeder;

class InningGameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inning_game')->insert([
            [
                'id' => 1,
                'inning_id' => 1,
                'game_id' => 1,
            ],
            [
                'id' => 2,
                'inning_id' => 2,
                'game_id' => 1,
            ],
            [
                'id' => 3,
                'inning_id' => 3,
                'game_id' => 1,
            ],
            [
                'id' => 4,
                'inning_id' => 4,
                'game_id' => 1,
            ],
            [
                'id' => 5,
                'inning_id' => 5,
                'game_id' => 1,
            ],
            [
                'id' => 6,
                'inning_id' => 6,
                'game_id' => 1,
            ],
            [
                'id' => 7,
                'inning_id' => 7,
                'game_id' => 1,
            ],
            [
                'id' => 8,
                'inning_id' => 8,
                'game_id' => 1,
            ],
            [
                'id' => 9,
                'inning_id' => 9,
                'game_id' => 1,
            ],
            [
                'id' => 10,
                'inning_id' => 10,
                'game_id' => 1,
            ],
            [
                'id' => 11,
                'inning_id' => 11,
                'game_id' => 1,
            ],
            [
                'id' => 12,
                'inning_id' => 12,
                'game_id' => 1,
            ],
            [
                'id' => 13,
                'inning_id' => 13,
                'game_id' => 1,
            ],
            [
                'id' => 14,
                'inning_id' => 14,
                'game_id' => 1,
            ],
            [
                'id' => 15,
                'inning_id' => 15,
                'game_id' => 1,
            ],
            [
                'id' => 16,
                'inning_id' => 16,
                'game_id' => 1,
            ]
    ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class StatsPitchingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stats_pitching')->insert([
            [
                'player_id' => 11,
                'game_id' => 1,
                'w' => 1,
                'l' => 0,
                'gs' => 1,
                'gf' => 1,
                'sho' => 0,
                'sv' => 0,
                'ip' => 8.0,
                'h' => 7,
                'r' => 1,
                'er' => 1,
                'hr' => 0,
                'bb' => 0,
                'ibb' => 0,
                'so' => 9,
                'hbp' => 0,
                'bk' => 0,
                'wp' => 0,
                'bf' => 31
            ],
            [
                'player_id' => 21,
                'game_id' => 1,
                'w' => 0,
                'l' => 0,
                'gs' => 1,
                'gf' => 0,
                'sho' => 0,
                'sv' => 0,
                'ip' => 4.0,
                'h' => 2,
                'r' => 1,
                'er' => 1,
                'hr' => 0,
                'bb' => 1,
                'ibb' => 0,
                'so' => 3,
                'hbp' => 0,
                'bk' => 0,
                'wp' => 0,
                'bf' => 15
            ],
            [
                'player_id' => 22,
                'game_id' => 1,
                'w' => 0,
                'l' => 0,
                'gs' => 0,
                'gf' => 0,
                'sho' => 0,
                'sv' => 0,
                'ip' => 3.0,
                'h' => 1,
                'r' => 0,
                'er' => 0,
                'hr' => 0,
                'bb' => 2,
                'ibb' => 0,
                'so' => 0,
                'hbp' => 0,
                'bk' => 0,
                'wp' => 0,
                'bf' => 12
            ],
            [
                'player_id' => 23,
                'game_id' => 1,
                'w' => 0,
                'l' => 1,
                'gs' => 0,
                'gf' => 1,
                'sho' => 0,
                'sv' => 0,
                'ip' => 0.1,
                'h' => 2,
                'r' => 3,
                'er' => 3,
                'hr' => 1,
                'bb' => 0,
                'ibb' => 0,
                'so' => 1,
                'hbp' => 1,
                'bk' => 0,
                'wp' => 0,
                'bf' => 4
            ]
        ]);
    }
}

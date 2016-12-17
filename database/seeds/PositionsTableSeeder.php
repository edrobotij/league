<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            [
                'id' => 1,
                'name' => 'Pitcher',
                'abbr' => 'P'
            ],
            [
                'id' => 2,
                'name' => 'Catcher',
                'abbr' => 'C'
            ],
            [
                'id' => 3,
                'name' => 'First Base',
                'abbr' => '1B'
            ],
            [
                'id' => 4,
                'name' => 'Second Base',
                'abbr' => '2B'
            ],
            [
                'id' => 5,
                'name' => 'Third Base',
                'abbr' => '3B'
            ],
            [
                'id' => 6,
                'name' => 'Shortstop',
                'abbr' => 'SS'
            ],
            [
                'id' => 7,
                'name' => 'Left Field',
                'abbr' => 'LF'
            ],
            [
                'id' => 8,
                'name' => 'Center Field',
                'abbr' => 'CF'
            ],
            [
                'id' => 9,
                'name' => 'Right Field',
                'abbr' => 'RF'
            ]
        ]);
    }
}

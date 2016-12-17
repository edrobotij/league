<?php

use Illuminate\Database\Seeder;

class TeamColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_color')->insert([
            [
                'team_id' => 1,
                'primary_color_id' => 1,
                'secondary_color_id' => 2,
                'tertiary_color_id' => 3,
            ],
            [
                'team_id' => 2,
                'primary_color_id' => 4,
                'secondary_color_id' => 5,
                'tertiary_color_id' => 3
            ]
        ]);
    }
}

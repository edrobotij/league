<?php

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            [
                'id' => 1,
                'league_id' => 1,
                'name' => 'A'
            ],
            [
                'id' => 2,
                'league_id' => 1,
                'name' => 'AA'
            ],
            [
                'id' => 3,
                'league_id' => 1,
                'name' => 'AAA'
            ]
        ]);
    }
}

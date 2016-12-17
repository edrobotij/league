<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'id' => 1,
                'league_id' => 1,
                'division_id' => 3,
                'manager_id' => 3,
                'name' => 'Jefferson Hills Indians',
                'city' => 'Jefferson Hills',
                'state' => 'PA'
            ],
            [
                'id' => 2,
                'league_id' => 1,
                'division_id' => 3,
                'manager_id' => 5,
                'name' => 'Clinton Cherokee',
                'city' => 'Clinton',
                'state' => 'PA'
            ]
        ]);
    }
}

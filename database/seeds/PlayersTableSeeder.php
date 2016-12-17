<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            [
                'id' => 1,
                'first_name' => 'Eric',
                'last_name' => 'Fairman',
                'team_id' => 1,
                'number' => 1,
                'bats' => 'L',
                'throws' => 'R'
            ],
            [
                'id' => 2,
                'first_name' => 'Michael',
                'last_name' => 'Hermann',
                'team_id' => 1,
                'number' => 2,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 3,
                'first_name' => 'Ryan',
                'last_name' => 'Kandsberger',
                'team_id' => 1,
                'number' => 3,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 4,
                'first_name' => 'Brooks',
                'last_name' => 'Marzka',
                'team_id' => 1,
                'number' => 4,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 5,
                'first_name' => 'Mark',
                'last_name' => 'Mazur',
                'team_id' => 1,
                'number' => 5,
                'bats' => 'S',
                'throws' => 'R'
            ],
            [
                'id' => 6,
                'first_name' => 'Jayson',
                'last_name' => 'Monroe',
                'team_id' => 1,
                'number' => 6,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 7,
                'first_name' => 'John',
                'last_name' => 'Nusser',
                'team_id' => 1,
                'number' => 7,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 8,
                'first_name' => 'James',
                'last_name' => 'Pasquine',
                'team_id' => 1,
                'number' => 8,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 9,
                'first_name' => 'Jack',
                'last_name' => 'Shaffer',
                'team_id' => 1,
                'number' => 9,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 10,
                'first_name' => 'Matt',
                'last_name' => 'Westwood',
                'team_id' => 1,
                'number' => 10,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 11,
                'first_name' => 'Eric',
                'last_name' => 'Drobotij',
                'team_id' => 1,
                'number' => 31,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 12,
                'first_name' => 'Dan',
                'last_name' => 'Laird',
                'team_id' => 1,
                'number' => 11,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 13,
                'first_name' => 'James',
                'last_name' => 'Carr',
                'team_id' => 2,
                'number' => 1,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 14,
                'first_name' => 'Jacob',
                'last_name' => 'Carter',
                'team_id' => 2,
                'number' => 2,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 15,
                'first_name' => 'Anthony',
                'last_name' => 'DeFilippo',
                'team_id' => 2,
                'number' => 3,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 16,
                'first_name' => 'Nico',
                'last_name' => 'Delerme',
                'team_id' => 2,
                'number' => 4,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 17,
                'first_name' => 'David',
                'last_name' => 'Houseman',
                'team_id' => 2,
                'number' => 5,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 18,
                'first_name' => 'Derek',
                'last_name' => 'Hughes',
                'team_id' => 2,
                'number' => 6,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 19,
                'first_name' => 'Austin',
                'last_name' => 'Long',
                'team_id' => 2,
                'number' => 7,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 20,
                'first_name' => 'Dave',
                'last_name' => 'McNeill',
                'team_id' => 2,
                'number' => 8,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 21,
                'first_name' => 'Austin',
                'last_name' => 'Mike',
                'team_id' => 2,
                'number' => 9,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 22,
                'first_name' => 'Andy',
                'last_name' => 'Burlett',
                'team_id' => 2,
                'number' => 10,
                'bats' => 'R',
                'throws' => 'R'
            ],
            [
                'id' => 23,
                'first_name' => 'Tim',
                'last_name' => 'Knight',
                'team_id' => 2,
                'number' => 11,
                'bats' => 'R',
                'throws' => 'R'
            ]
        ]);
    }
}

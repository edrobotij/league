<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'league_admin',
                'email' => 'admin@league.com',
                'password' => app('hash')->make('admin'),
                'first_name' => 'Eric',
                'last_name' => 'Drobotij',
                'birthdate' => '1985-08-21 00:00:00',
                'city' => 'Pittsburgh',
                'state' => 'PA',
                'zip' => '15216'
            ],
            [
                'id' => 2,
                'name' => 'jgraff',
                'email' => 'joegraff@pittsburghnaba.com',
                'password' => app('hash')->make('commissioner'),
                'first_name' => 'Joe',
                'last_name' => 'Graff',
                'birthdate' => '1985-08-01 00:00:00',
                'city' => 'Pittsburgh',
                'state' => 'PA',
                'zip' => '15213'
            ],
            [
                'id' => 3,
                'name' => 'kreynolds',
                'email' => 'kreynolds@gmail.com',
                'password' => app('hash')->make('manager'),
                'first_name' => 'Keith',
                'last_name' => 'Reynolds',
                'birthdate' => '1960-08-01 00:00:00',
                'city' => 'Pittsburgh',
                'state' => 'PA',
                'zip' => '15228'
            ],
            [
                'id' => 4,
                'name' => 'edrobotij',
                'email' => 'edrobotij@league.com',
                'password' => app('hash')->make('test123'),
                'first_name' => 'Eric',
                'last_name' => 'Drobotij',
                'birthdate' => '1985-08-21 00:00:00',
                'city' => 'Pittsburgh',
                'state' => 'PA',
                'zip' => '15216'
            ],
            [
                'id' => 5,
                'name' => 'rcool',
                'email' => 'robcool@cool.com',
                'password' => app('hash')->make('cool'),
                'first_name' => 'Rob',
                'last_name' => 'Cool',
                'birthdate' => '1984-07-04 00:00:00',
                'city' => 'Clinton',
                'state' => 'PA',
                'zip' => '15026'
            ]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'slug' => 'admin',
                'level' => 4
            ],
            [
                'id' => 2,
                'name' => 'Commissioner',
                'slug' => 'commissioner',
                'level' => 3
            ],
            [
                'id' => 3,
                'name' => 'Manager',
                'slug' => 'manager',
                'level' => 2
            ],
            [
                'id' => 4,
                'name' => 'Player',
                'slug' => 'player',
                'level' => 1
            ]
        ]);
    }
}

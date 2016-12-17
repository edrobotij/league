<?php

use Illuminate\Database\Seeder;

class PlayerUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('player_user')->insert([
            'player_id' => 11,
            'user_id' => 4
        ]);
    }
}

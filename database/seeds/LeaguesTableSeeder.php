<?php

use Illuminate\Database\Seeder;

class LeaguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leagues')->insert([
            'id' => 1,
            'name' => 'Pittsburgh NABA',
            'description' => 'An adult baseball league based out of Pittsburgh, PA.',
            'city' => 'Pittsburgh',
            'state' => 'PA',
            'commissioner_id' => 2
        ]);
    }
}

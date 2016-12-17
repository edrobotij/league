<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            [
                'id' => 1,
                'code' => '002b5c'
            ],
            [
                'id' => 2,
                'code' => 'e31937'
            ],
            [
                'id' => 3,
                'code' => 'ffffff'
            ],
            [
                'id' => 4,
                'code' => '330000'
            ],
            [
                'id' => 5,
                'code' => 'cccc88'
            ],
            [
                'id' => 6,
                'code' => '000033'
            ],
            [
                'id' => 7,
                'code' => '860038'
            ]
        ]);
    }
}

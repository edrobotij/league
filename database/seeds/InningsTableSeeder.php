<?php

use Illuminate\Database\Seeder;

class InningsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('innings')->insert([
            [
                'id' => 1,
                'name' => 'Top 1'
            ],
            [
                'id' => 2,
                'name' => 'Bottom 1'
            ],
            [
                'id' => 3,
                'name' => 'Top 2',
            ],
            [
                'id' => 4,
                'name' => 'Bottom 2'
            ],
            [
                'id' => 5,
                'name' => 'Top 3'
            ],
            [
                'id' => 6,
                'name' => 'Bottom 3'
            ],
            [
                'id' => 7,
                'name' => 'Top 4'
            ],
            [
                'id' => 8,
                'name' => 'Bottom 4'
            ],
            [
                'id' => 9,
                'name' => 'Top 5'
            ],
            [
                'id' => 10,
                'name' => 'Bottom 5'
            ],
            [
                'id' => 11,
                'name' => 'Top 6'
            ],
            [
                'id' => 12,
                'name' => 'Bottom 6'
            ],
            [
                'id' => 13,
                'name' => 'Top 7'
            ],
            [
                'id' => 14,
                'name' => 'Bottom 7'
            ],
            [
                'id' => 15,
                'name' => 'Top 8'
            ],
            [
                'id' => 16,
                'name' => 'Bottom 8'
            ],
            [
                'id' => 17,
                'name' => 'Top 9'
            ],
            [
                'id' => 18,
                'name' => 'Bottom 9'
            ]
        ]);
    }
}

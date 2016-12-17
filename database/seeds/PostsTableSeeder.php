<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Test League Post',
                'body' => 'This is a test post for the Pittsburgh NABA league.',
                'author_id' => 1,
                'league_id' => 1,
                'division_id' => null,
                'team_id' => null
            ],
            [
                'title' => 'Test Division Post',
                'body' => 'This is a test post for Division AAA',
                'author_id' => 1,
                'league_id' => 1,
                'division_id' => 3,
                'team_id' => null
            ],
            [
                'title' => 'Test Team Post',
                'body' => 'This is a test post for the Jefferson Hills Indians',
                'author_id' => 2,
                'league_id' => 1,
                'division_id' => 3,
                'team_id' => 1
            ]
        ]);
    }
}

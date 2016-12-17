<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'About League',
                'body' => 'Welcome to League! A baseball league management platform.',
                'slug' => 'about'
            ],
            [
                'title' => 'Help',
                'body' => 'You need help? Well sorry but this thing is not even ready yet.',
                'slug' => 'help'
            ],
            [
                'title' => 'Contact Us',
                'body' => "You can't contact us, we're not real people.",
                'slug' => 'contact'
            ]
        ]);
    }
}

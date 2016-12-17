<?php

use Illuminate\Database\Seeder;

class LeaguesTableSlugColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leagues')
            ->where('id', 1)
            ->update(['slug' => 'pittsburghnaba']);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(LeaguesTableSeeder::class);
        $this->call(LeaguesTableSlugColumnSeeder::class);
        $this->call(DivisionsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(PlayersTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(PositionPlayerTableSeeder::class);
        $this->call(PlayerUserTableSeeder::class);
        $this->call(SeasonsTableSeeder::class);
        $this->call(FieldsTableSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(InningsTableSeeder::class);
        $this->call(InningGameTableSeeder::class);
        $this->call(ScoresTableSeeder::class);
        $this->call(StatsOffenseTableSeeder::class);
        $this->call(StatsDefenseTableSeeder::class);
        $this->call(StatsPitchingTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(LeagueColorTableSeeder::class);
        $this->call(TeamColorTableSeeder::class);
        $this->call(PagesTableSeeder::class);

        Model::reguard();
    }
}

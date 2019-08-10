<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(PeriodsTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(PublicationsTableSeeder::class);
        $this->call(ProgramsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(JournalsTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(CommitteesTableSeeder::class);
        $this->call(QuotesTableSeeder::class);
    }
}

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
    	$this->call(GenresTableSeeder::class);
        $this->call(GameReviewsTableSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

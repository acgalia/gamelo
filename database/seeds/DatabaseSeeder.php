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
        // $this->call(UserTableSeeder::class);
    	$this->call(GenreTableSeeder::class);

        // $this->call(GameTableSeeder::class);
        // $this->call(ReviewTableSeeder::class);
        // $this->call(Game_ReviewTableSeeder::class);
    }
}

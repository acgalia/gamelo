<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'created_at' => '2019-02-06 12:25:08',
                'updated_at' => '2019-02-06 12:25:08',
            ),
            1 => 
            array (
                'id' => 7,
                'user_id' => 2,
                'created_at' => '2019-02-06 12:30:23',
                'updated_at' => '2019-02-06 12:30:23',
            ),
            2 => 
            array (
                'id' => 16,
                'user_id' => 3,
                'created_at' => '2019-02-11 10:45:32',
                'updated_at' => '2019-02-11 10:45:32',
            ),
            3 => 
            array (
                'id' => 17,
                'user_id' => 2,
                'created_at' => '2019-02-12 02:32:54',
                'updated_at' => '2019-02-12 02:32:54',
            ),
            4 => 
            array (
                'id' => 18,
                'user_id' => 3,
                'created_at' => '2019-02-12 09:40:31',
                'updated_at' => '2019-02-12 09:40:31',
            ),
            5 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'created_at' => '2019-02-12 12:25:57',
                'updated_at' => '2019-02-12 12:25:57',
            ),
            6 => 
            array (
                'id' => 22,
                'user_id' => 3,
                'created_at' => '2019-02-12 15:03:24',
                'updated_at' => '2019-02-12 15:03:24',
            ),
            7 => 
            array (
                'id' => 23,
                'user_id' => 3,
                'created_at' => '2019-02-13 00:19:41',
                'updated_at' => '2019-02-13 00:19:41',
            ),
            8 => 
            array (
                'id' => 24,
                'user_id' => 3,
                'created_at' => '2019-02-13 00:26:15',
                'updated_at' => '2019-02-13 00:26:15',
            ),
            9 => 
            array (
                'id' => 26,
                'user_id' => 2,
                'created_at' => '2019-02-13 01:13:15',
                'updated_at' => '2019-02-13 01:13:15',
            ),
            10 => 
            array (
                'id' => 27,
                'user_id' => 2,
                'created_at' => '2019-02-13 02:18:55',
                'updated_at' => '2019-02-13 02:18:55',
            ),
            11 => 
            array (
                'id' => 28,
                'user_id' => 3,
                'created_at' => '2019-02-13 08:55:54',
                'updated_at' => '2019-02-13 08:55:54',
            ),
            12 => 
            array (
                'id' => 37,
                'user_id' => 2,
                'created_at' => '2019-02-13 15:48:10',
                'updated_at' => '2019-02-13 15:48:10',
            ),
            13 => 
            array (
                'id' => 41,
                'user_id' => 4,
                'created_at' => '2019-02-14 01:55:46',
                'updated_at' => '2019-02-14 01:55:46',
            ),
            14 => 
            array (
                'id' => 42,
                'user_id' => 1,
                'created_at' => '2019-02-14 02:40:55',
                'updated_at' => '2019-02-14 02:40:55',
            ),
        ));
        
        
    }
}
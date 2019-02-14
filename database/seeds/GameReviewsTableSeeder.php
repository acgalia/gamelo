<?php

use Illuminate\Database\Seeder;

class GameReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('game_reviews')->delete();
        
        \DB::table('game_reviews')->insert(array (
            0 => 
            array (
                'id' => 4,
                'rating' => 4,
                'comment' => 'this game is awesome',
                'game_id' => 3,
                'review_id' => 4,
                'created_at' => '2019-02-06 12:25:08',
                'updated_at' => '2019-02-14 01:01:21',
            ),
            1 => 
            array (
                'id' => 6,
                'rating' => 5,
                'comment' => 'five!',
                'game_id' => 1,
                'review_id' => 7,
                'created_at' => '2019-02-06 12:30:23',
                'updated_at' => '2019-02-10 14:55:40',
            ),
            2 => 
            array (
                'id' => 14,
                'rating' => 2,
                'comment' => 'twoooo heads are better than one!!!!!!!!!!!!!!!!!!',
                'game_id' => 1,
                'review_id' => 16,
                'created_at' => '2019-02-11 10:45:32',
                'updated_at' => '2019-02-12 10:15:54',
            ),
            3 => 
            array (
                'id' => 15,
                'rating' => 3,
                'comment' => 'chasing pavements',
                'game_id' => 1,
                'review_id' => 17,
                'created_at' => '2019-02-12 02:32:54',
                'updated_at' => '2019-02-12 02:32:54',
            ),
            4 => 
            array (
                'id' => 16,
                'rating' => 2,
                'comment' => 'i give this two',
                'game_id' => 3,
                'review_id' => 18,
                'created_at' => '2019-02-12 09:40:31',
                'updated_at' => '2019-02-12 09:40:31',
            ),
            5 => 
            array (
                'id' => 18,
                'rating' => 5,
                'comment' => 'Nice. this one is updated. you\'re so good melo. i like this comment. very simple and short.',
                'game_id' => 3,
                'review_id' => 20,
                'created_at' => '2019-02-12 12:25:57',
                'updated_at' => '2019-02-14 01:20:41',
            ),
            6 => 
            array (
                'id' => 20,
                'rating' => 4,
                'comment' => 'hello i\'m a gamer',
                'game_id' => 5,
                'review_id' => 22,
                'created_at' => '2019-02-12 15:03:24',
                'updated_at' => '2019-02-12 15:03:24',
            ),
            7 => 
            array (
                'id' => 21,
                'rating' => 5,
                'comment' => 'hey.',
                'game_id' => 1,
                'review_id' => 23,
                'created_at' => '2019-02-13 00:19:41',
                'updated_at' => '2019-02-13 00:20:18',
            ),
            8 => 
            array (
                'id' => 22,
                'rating' => 2,
                'comment' => 'nice.',
                'game_id' => 1,
                'review_id' => 24,
                'created_at' => '2019-02-13 00:26:15',
                'updated_at' => '2019-02-13 00:26:15',
            ),
            9 => 
            array (
                'id' => 24,
                'rating' => 3,
                'comment' => 'okay.',
                'game_id' => 1,
                'review_id' => 26,
                'created_at' => '2019-02-13 01:13:15',
                'updated_at' => '2019-02-13 01:13:15',
            ),
            10 => 
            array (
                'id' => 25,
                'rating' => 1,
                'comment' => 'what?',
                'game_id' => 3,
                'review_id' => 27,
                'created_at' => '2019-02-13 02:18:55',
                'updated_at' => '2019-02-14 01:01:07',
            ),
            11 => 
            array (
                'id' => 26,
                'rating' => 4,
                'comment' => 'I give this 4',
                'game_id' => 6,
                'review_id' => 28,
                'created_at' => '2019-02-13 08:55:54',
                'updated_at' => '2019-02-13 08:55:54',
            ),
            12 => 
            array (
                'id' => 35,
                'rating' => 3,
                'comment' => '64564654',
                'game_id' => 7,
                'review_id' => 37,
                'created_at' => '2019-02-13 15:48:10',
                'updated_at' => '2019-02-13 15:48:10',
            ),
            13 => 
            array (
                'id' => 39,
                'rating' => 3,
                'comment' => 'a beautiful game.',
                'game_id' => 9,
                'review_id' => 41,
                'created_at' => '2019-02-14 01:55:46',
                'updated_at' => '2019-02-14 02:26:51',
            ),
            14 => 
            array (
                'id' => 40,
                'rating' => 5,
                'comment' => 'comment edited.',
                'game_id' => 9,
                'review_id' => 42,
                'created_at' => '2019-02-14 02:40:55',
                'updated_at' => '2019-02-14 02:41:18',
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('games')->delete();
        
        \DB::table('games')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Tom Clancy’s The Division 2',
                'developer' => 'Ubisoft Entertainment',
                'date_released' => '2019-03',
                'content' => 'Lead a team of elite agents into a post-pandemic Washington, DC, to restore order and prevent the collapse of the city. Tom Clancy’s The Division 2 is an online action-shooter RPG experience, where exploration and player progression are essential. Save a country on the brink of collapse as you explore an open, dynamic, and hostile world in Washington, DC. Fight together with your friends in online co-op or against others in competitive PvP. Choose a unique class specialization to take on the toughest challenges with friends in a genre-defining endgame.',
                'image_path' => 'images/1549968115.png',
                'genre_id' => 4,
                'created_at' => '2019-01-31 09:52:44',
                'updated_at' => '2019-02-12 10:41:55',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Metro Exodus',
                'developer' => 'Deep Silver',
                'date_released' => '2019-02',
                'content' => 'Metro Exodus is an epic, story-driven first person shooter from 4A Games that blends deadly combat and stealth with exploration and survival horror in one of the most immersive game worlds ever created.

Flee the shattered ruins of dead Moscow and embark on an epic, continent-spanning journey across post-apocalyptic Russia in the greatest Metro adventure yet.

Explore the Russian wilderness in vast, non-linear levels and follow a thrilling story-line inspired by the novels of Dmitry Glukhovsky that spans an entire year through spring, summer and autumn to the depths of nuclear winter.',
                'image_path' => 'images/1549968933.png',
                'genre_id' => 2,
                'created_at' => '2019-02-02 12:07:03',
                'updated_at' => '2019-02-13 12:48:14',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Resident Evil VII',
                'developer' => 'Capcom U.S.A., Inc.',
                'date_released' => '2017-01',
                'content' => 'Fear and isolation seep through the walls of an abandoned southern farmhouse. \'7\' marks a new beginning for survival horror with the “Isolated View” of the visceral new first-person perspective. Powered by the RE Engine, horror reaches incredible heights of immersion as players enter a terrifyingly new world of fear as they fight to survive.',
                'image_path' => 'images/1550029207.png',
                'genre_id' => 4,
                'created_at' => '2019-02-09 14:16:08',
                'updated_at' => '2019-02-13 03:40:07',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Destiny 2: Forsaken',
                'developer' => 'Bungie',
                'date_released' => '2017-09',
                'content' => 'The Reef has fallen to lawlessness, and now the most-wanted criminals in the galaxy - the Barons & Uldren Sov - have organized a jailbreak at the Prison of Elders. You and Cayde-6 have been sent in to bring law and order back to the embattled facility, but things do not go to plan.

- Hunt Down Uldren Sov and avenge Cayde-6
- Grow your Legend with New Exotic Weapons, Armor, and Gear
- Two New Destinations: The Tangled Shore and The Dreaming City
- Introducing Gambit, a 4v4 Competitive PvE Mode
- Nine Additional Supers
- New Raid',
                'image_path' => 'images/1549794233.png',
                'genre_id' => 2,
                'created_at' => '2019-02-10 10:22:38',
                'updated_at' => '2019-02-10 10:23:53',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'God of War',
                'developer' => 'Sony Interactive Entertainment',
                'date_released' => '2018-04',
                'content' => 'From Santa Monica Studio and creative director Cory Barlog comes a new beginning for one of gaming’s most recognizable icons. Living as a man outside the shadow of the gods, Kratos must adapt to unfamiliar lands, unexpected threats, and a second chance at being a father. Together with his son Atreus, the pair will venture into the brutal Norse wilds and fight to fulfill a deeply personal quest.',
                'image_path' => 'images/1550073606.png',
                'genre_id' => 4,
                'created_at' => '2019-02-12 12:06:28',
                'updated_at' => '2019-02-13 16:00:06',
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'Shadow of the Colossus',
                'developer' => 'Sony Interactive Entertainment',
                'date_released' => '2018-02',
                'content' => 'Tales speak of an ancient realm where Colossi roam the majestic landscape. Bound to the land, these creatures hold a key to a mystical power of revival – a power you must obtain to bring a loved one back to life. 

SHADOW OF THE COLOSSUS is a breathtaking journey through ancient lands to seek out gigantic beasts. Armed with only a sword and a bow, explore the spacious lands and unearth each Colossus, presenting a unique challenge to test your wits, determination, and skill.',
                'image_path' => 'images/1550073454.png',
                'genre_id' => 1,
                'created_at' => '2019-02-12 12:08:25',
                'updated_at' => '2019-02-13 15:57:34',
            ),
            6 => 
            array (
                'id' => 8,
                'title' => 'Red Dead Redemption 2',
                'developer' => 'Rockstar Games',
                'date_released' => '2018-10',
                'content' => 'America, 1899. The end of the wild west era has begun as lawmen hunt down the last remaining outlaw gangs. Those who will not surrender or succumb are killed. 

After a robbery goes badly wrong in the western town of Blackwater, Arthur Morgan and the Van der Linde gang are forced to flee. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive. As deepening internal divisions threaten to tear the gang apart, Arthur must make a choice between his own ideals and loyalty to the gang who raised him.',
                'image_path' => 'images/1550073064.png',
                'genre_id' => 4,
                'created_at' => '2019-02-12 12:09:36',
                'updated_at' => '2019-02-13 15:51:04',
            ),
            7 => 
            array (
                'id' => 9,
                'title' => 'Days Gone',
                'developer' => 'Sony Interactive Entertainment',
                'date_released' => '2019-04',
                'content' => 'Days Gone is an open-world action-adventure game set in a harsh wilderness two years after a devastating global pandemic. Play as Deacon St. John, a drifter and bounty hunter who rides the broken road, fighting to survive while searching for a reason to live.',
                'image_path' => 'images/1550072695.png',
                'genre_id' => 4,
                'created_at' => '2019-02-12 12:11:02',
                'updated_at' => '2019-02-14 03:04:20',
            ),
        ));
        
        
    }
}
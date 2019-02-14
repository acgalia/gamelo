<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'Administrator',
                'email' => 'mail@mail.com',
                'email_verified_at' => NULL,
                'admin' => 1,
                'password' => '$2y$10$GLoDndFl..lMmb3WRjoH0OKbw62bZ1GY8/hZAV43cAvmOgYgAGYPG',
                'remember_token' => 'xUqbaNs0kqAtu4OtXSbmPK7OJzlituxOxKW4JfedoQrE1VhQo6XbG5CQ8tBt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'acgalia',
                'email' => 'a.carmelo.galia@gmail.com',
                'email_verified_at' => NULL,
                'admin' => 0,
                'password' => '$2y$10$f96ijLG.o1EA30fF8IjloObilBoQByPhyKUVLlIg7xwd3nlofTmKK',
                'remember_token' => 'EbkIuZdhc6D7B95hpMf2ISVlYSCZP0U0TKs3zVlJCTQbJ0fsFxV1nsmbx7cg',
                'created_at' => '2019-01-29 09:59:56',
                'updated_at' => '2019-01-29 09:59:56',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => 'melo',
                'email' => 'aaron.carmelo.galia@gmail.com',
                'email_verified_at' => NULL,
                'admin' => 0,
                'password' => '$2y$10$sFPNVoAvxhIJI3RgSnU/TusvHCxjuHDbJmKASBR7BlCnh2m0CmqJ6',
                'remember_token' => 'FwzkWilZaNhpMhLR7xXBrIbFRCclpEcheRGDO3bcCNBhwtMTX512uRy9TTdq',
                'created_at' => '2019-02-08 09:19:48',
                'updated_at' => '2019-02-08 09:19:48',
            ),
            3 => 
            array (
                'id' => 4,
                'username' => 'melopogi',
                'email' => 'acgalia@yahoo.com',
                'email_verified_at' => NULL,
                'admin' => 0,
                'password' => '$2y$10$UykPnD6R6SZkhxz0K9of.O0D3wVJAzDUQe1pZMRTXHJf5PBmeLLSa',
                'remember_token' => 'd1HO1MXLHWGBf22Z9dlKiOf04ZkDGiZ85DucMml4I5RYGzRm4zRn417wZQA7',
                'created_at' => '2019-02-14 01:04:59',
                'updated_at' => '2019-02-14 01:04:59',
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('users')->detete();


        $users = array(
        	array(
        		"name" => 'zhnb4',
        		'password' => Hash::make('123'),
        		'email' => 'zhnb4@mail.ru'
        	)
        );

        DB::table('users')->insert($users);
    }
}

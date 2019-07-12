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
        //

        $user = App\User::create([

        	'name' => 'Kati Frantz',
        	'email' => 'kati@frantz.me',
        	'password' => bcrypt('123456'),
            'admin' => 1



        ]);

        App\Profile::create([

            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Fusce fringilla risus vel maximus porttitor.Duis consectetur tempor odio.',

            'facebook' => 'facebook.com',

            'youtube' => 'youtube.com',



        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Lucas',
        	'email' => 'lmduran@gmail.com',
        	'password' => bcrypt('123123')
        ]);

        User::create([
            'name' => 'Julio',
            'email' => 'cottijulio@gmail.com',
            'password' => bcrypt('123123')
        ]);

        User::create([
            'name' => 'Mia',
            'email' => 'miasartori@gmail.com',
            'password' => bcrypt('123123')
        ]);
    }
}

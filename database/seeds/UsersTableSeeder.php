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
        	'email' => 'lucasmmduran@gmail.com',
        	'password' => bcrypt('123123')
        ]);
    }
}

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
        //
        User::create([
            'name' => 'Owner',
            'email' => 'owner@gmail.com',
            'phone' => '087888997711',
            'password' => bcrypt('owner'),
            'status' => true
        ]);
    }
}

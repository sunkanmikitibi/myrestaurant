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
         \App\User::create([
             'name' =>'Olamide Olukitibi',
             'email' => 'sunkitibi@gmail.com',
             'password'=> bcrypt('sunkanmi'),
         ]);
    }
}

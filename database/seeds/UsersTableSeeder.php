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
      User::create(['name' => str_random(10), 'email' => 'test@gmail.com', 'password' => bcrypt('secret')]);
      User::create(['name' => 'Ian', 'email' => 'azure820529@gmail.com', 'password' => bcrypt('00000000')]);
    }
}

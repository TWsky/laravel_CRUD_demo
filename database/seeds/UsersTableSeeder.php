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
      DB::table('users')->insert([
        ['name' => str_random(10), 'email' => 'test@gmail.com', 'password' => bcrypt('secret'), 'created_at' => date("Y-m-d")],
        ['name' => 'Ian', 'email' => 'azure820529@gmail.com', 'password' => bcrypt('00000000'), 'created_at' => date("Y-m-d")]
      ]);
    }
}

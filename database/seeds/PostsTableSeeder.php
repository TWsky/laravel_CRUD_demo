<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
          ['title' => '第一篇', 'content' =>' 內文一', 'dueDate' => '2016-09-18', 'user_id' => '4', 'created_at' => date("Y-m-d")],
          ['title' => '第二篇', 'content' => '內文二', 'dueDate' => '2016-09-20', 'user_id' => '4', 'created_at' => date("Y-m-d")]
        ]);
    }
}

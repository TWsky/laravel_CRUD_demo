<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $post = Post::create(['title' => '第一篇', 'content' =>' 內文一', 'dueDate' => '2016-09-18', 'user_id' => '2']);
      $post = Post::create(['title' => '第二篇', 'content' => '內文二', 'dueDate' => '2016-09-20', 'user_id' => '2']);
    }
}

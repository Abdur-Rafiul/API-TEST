<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostWithCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++){
           
            $post = Post::create([
                   'title' => 'post ' . $i,
            ]);

            for($j = 1; $j <= 10; $j++){
            
               $comment = Comment::create([
                   'post_id' => $post->id,
                   'comment' => 'comment ' . $i
               ]);
            } 
        
        }
    }
}

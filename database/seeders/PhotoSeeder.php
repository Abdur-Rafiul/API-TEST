<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            $post->photo()->create([
                'url' => fake()->imageUrl(),
            ]);
        }
        $users = User::all();
        foreach ($users as $user) {
            $user->photo()->create([
                'url' => fake()->imageUrl(),
            ]);
        }
    }
}

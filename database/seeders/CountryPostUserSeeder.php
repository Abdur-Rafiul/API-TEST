<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\User;
use App\Models\Post;
class CountryPostUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             Country::factory()->count(3)->create()->each(function ($country) {
            $users = User::factory()->count(2)->create([
                'country_id' => $country->id,
            ]);

            Post::factory()->create([
                'user_id' => $users->first()->id,
            ]);

            Post::factory()->count(2)->create([
                'user_id' => $users->last()->id,
            ]);
        });
    }
}

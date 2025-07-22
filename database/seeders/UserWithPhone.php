<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserWithPhone extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        User::factory()
            ->count(10)
            ->create()
            ->each(function ($user) {
                Phone::create([
                    'user_id' => $user->id,
                    'number' => fake()->phoneNumber,
                ]);
            });
    }
}

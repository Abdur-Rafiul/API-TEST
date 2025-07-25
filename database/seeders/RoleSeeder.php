<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'admin'],
            ['name' => 'user'],
            ['name' => 'guest'],
            ['name' => 'moderator'],
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role['name'],
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;
use App\Models\User;

class GroupUserSeeder extends Seeder
{
    public function run(): void
    {
        $group = Group::create([
            'name' => 'Family',
        ]);

        $user = User::where('email', 'test@example.com')->first();

        $group->users()->attach($user->id);
    }
}

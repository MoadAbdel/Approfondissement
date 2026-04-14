<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'test@example.com')->first();

        $user->orders()->create([
            'status' => 'paid',
            'amount' => 50,
        ]);
    }
}

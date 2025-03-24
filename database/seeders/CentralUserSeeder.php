<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CentralUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $email = 'central@admin.com';
        $user = User::query()->firstOrCreate(
            ['email' => $email],
            [
                'first_name' => 'Central',
                'last_name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

        $user->assignRole(RoleEnum::CENTRAL_ADMIN);
    }
}

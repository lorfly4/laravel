<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Administrator;

class CreateAdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'petir',
                'Password' => bcrypt('abc'),
                'admin_type' => 'admin',
            ],
            [
                'username' => 'guest',
                'password' => bcrypt('guest'),
                'admin_type' => 'guest',
            ]
        ];

        foreach ($users as $user) {
            Administrator::create($user);
        }
    }
}


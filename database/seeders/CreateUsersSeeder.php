<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [

            [
                'name' => 'dhafin',
                'email' => 'admin@socialgmail.com',
                'role' => 'socialAdmin',
                'password' => bcrypt('password'),
            ],

            [
                'name' => 'zafar',
                'email' => 'admin@projectgmail.com',
                'role' => 'projectAdmin',
                'password' => bcrypt('password'),
            ],

            [
                'name' => 'rafi',
                'email' => 'admin@supergmail.com',
                'role' => 'superAdmin',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}

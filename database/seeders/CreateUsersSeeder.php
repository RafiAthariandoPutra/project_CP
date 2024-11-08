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
                'name' => 'social Admin',
                'email' => 'admin@socialgmail.com',
                'role' => 'socialAdmin',
                'password' => bcrypt('password'),
            ],

            [
                'name' => 'project Admin',
                'email' => 'admin@projectgmail.com',
                'role' => 'projectAdmin',
                'password' => bcrypt('password'),
            ],

            [
                'name' => 'super Admin',
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

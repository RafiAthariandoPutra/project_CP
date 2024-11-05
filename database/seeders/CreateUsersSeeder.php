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
                'Role' => 'socialAdmin',
                'password' => bcrypt('password'),
            ],

            [
                'name' => 'project Admin',
                'email' => 'admin@projectgmail.com',
                'Role' => 'projectAdmin',
                'password' => bcrypt('password'),
            ],

            [
                'name' => 'super Admin',
                'email' => 'admin@supergmail.com',
                'Role' => 'superAdmin',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}

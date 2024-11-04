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
               'name'=>'Admin User',
               'email'=>'admin@itsolutionstuff.com',
               'Role'=>'socialAdmin',
               'password'=> bcrypt('password'),
            ],

            [
               'name'=>'Manager User',
               'email'=>'manager@itsolutionstuff.com',
               'Role'=>'projectAdmin',
               'password'=> bcrypt('password'),
            ],

            [
               'name'=>'User',
               'email'=>'user@itsolutionstuff.com',
               'Role'=>'superAdmin',
               'password'=> bcrypt('password'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}

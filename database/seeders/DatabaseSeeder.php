<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Hero;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'tes@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        Hero::create([
            'title' => 'Hero Section',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quam nostrum corporis explicabo non laborum? Quasi, ad, veniam eos id iste voluptate molestias distinctio iure quod corporis labore earum possimus.',
            'hero_image' => 'hero_image/2022/66f25d6e88db8.png',
        ]);
    }
}

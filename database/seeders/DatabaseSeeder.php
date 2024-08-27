<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use App\Models\People;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            "name" => "Administrator",
            "email" => "admin@gmail.com",
            "password" => "admin123",
        ]);

        NewsCategory::create([
            "name" => "Technology",
        ]);

        NewsCategory::create([
            "name" => "Science",
        ]);

        People::create([
            "name" => "Prof. Dr. Rayyan Nur F",
            "email" => "rayyannur5@gmail.com",
            "phone_number" => "085215955155",
            "position" =>  "Head of Laboratory",
            "interest" =>  "Elektronika",
            "picture" =>  "",
            "rank" =>  "1",
        ]);
        
        People::create([
            "name" => "Prof. Dr. Rayyan., S. Kom, M. Kom",
            "email" => "rayyannur5@gmail.com",
            "phone_number" => "085215955155",
            "position" =>  "Deputy Head of Laboratory",
            "interest" =>  "Elektronika",
            "picture" =>  "",
            "rank" =>  "1",
        ]);
        
        People::create([
            "name" => "Rayyan Nur Fauzan, S. Kom",
            "email" => "rayyannur5@gmail.com",
            "phone_number" => "085215955155",
            "position" =>  "Laboratory Assistant",
            "interest" =>  "Elektronika",
            "picture" =>  "",
            "rank" =>  "2",
        ]);

        People::create([
            "name" => "Rayyan Nur Fauzan, S. T",
            "email" => "rayyannur5@gmail.com",
            "phone_number" => "085215955155",
            "position" =>  "Laboratory Assistant",
            "interest" =>  "Elektronika",
            "picture" =>  "",
            "rank" =>  "2",
        ]);
    }
}

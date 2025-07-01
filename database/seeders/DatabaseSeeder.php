<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
use App\Models\Transaction;
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
        User::factory()->create([
            'name' => 'oussama',
            'email' => 'oussama@gmail.com',
            'password' => bcrypt('password123'),
        ]);

        Feature::create([
            'route_name' => 'feature1.index',
            'image' => 'https://images.unsplash.com/photo-1662947190722-5d272f82a526?q=80&w=2728&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'name' => 'Calculate Sum',
            'description' => 'Calculate the sum of two numbers.',
            'required_credits' => 1,
            'is_active' => true,
        ]);
        Feature::create([
            'route_name' => 'feature2.index',
            'image' => 'https://i0.wp.com/blog.openapihub.com/wp-content/uploads/2022/08/Slide1-1.jpg?resize=1200%2C675&ssl=1',
            'name' => 'Calculate Difference',
            'description' => 'Calculate the difference between two numbers.',
            'required_credits' => 3,
            'is_active' => true,
        ]);

        Package::create([
            'name' => 'Basic Package',
            'price' => 9.99,
            'credits' => 20,
        ]);
        Package::create([
            'name' => 'Silver Package',
            'price' => 99.99,
            'credits' => 100,
        ]);
        Package::create([
            'name' => 'GVolden Package',
            'price' => 199.99,
            'credits' => 500,
        ]);
    }
}

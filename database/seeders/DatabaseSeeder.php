<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Table Fan',
            'brand' => 'Midea',
            'prices' => '2',
            'photo' => '/storage/images/table fan.jpg',
            'category' => 'Furniture',
            'description' => '12" Table Fan',
            'owner' => '2',       
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Electric Kettle',
            'brand' => 'La Gourmet',
            'prices' => '2',
            'photo' => '/storage/images/electric kettle.jpg',
            'category' => 'Kitchen & Laundry',
            'description' => 'Large capacity, boil dry protection & rapid boiling',
            'owner' => '2',     
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Electric Cooker',
            'brand' => 'T0R0S',
            'prices' => '3',
            'photo' => '/storage/images/electric cooker.jpg',
            'category' => 'Kitchen & Laundry',
            'description' => 'Large capacity, boil dry protection & rapid boiling',
            'owner' => '2',       
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'HandHeld Fan',
            'brand' => 'EasyAce',
            'prices' => '1.5',
            'photo' => '/storage/images/handheld fan.jpg',
            'category' => 'Entertainment',
            'description' => 'Handheld, easy to bring',
            'owner' => '2',       
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Mini Projector',
            'brand' => 'AAO',
            'prices' => '4',
            'photo' => '/storage/images/mini projector.jpg',
            'category' => 'Computers',
            'description' => 'Easy to bring',
            'owner' => '2',       
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Laptop',
            'brand' => 'HP',
            'prices' => '6',
            'photo' => '/storage/images/hp laptop.jpg',
            'category' => 'Computers',
            'description' => '14" screen',
            'owner' => '2',       
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Speaker',
            'brand' => 'Sony',
            'prices' => '5.5',
            'photo' => '/storage/images/handheld fan.jpg',
            'category' => 'Entertainment',
            'description' => 'Handheld, easy to bring',
            'owner' => '2',       
        ]);
    }
}

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
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@rentIT.com',
            'password' => bcrypt('Pa$$word'),
            'phone' => "0184098292",
            'email_verified_at' => '2022-12-19',
            'isAdmin' => true,
        ]);

        \App\Models\User::factory()->create([
             'name' => 'Shawal',
             'email' => 'shawal@gmail.com',
             'password' => bcrypt('Pa$$word'),
             'phone' => "0111918980",
             'email_verified_at' => '2022-12-19'
         ]);

         \App\Models\User::factory()->create([
            'name' => 'Ikhwan',
            'email' => 'ikhwan@gmail.com',
            'password' => bcrypt('Pa$$word'),
            'phone' => "0111918556",
            'email_verified_at' => '2022-12-19'
        ]);

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
            'owner' => '3',       
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Mini Projector',
            'brand' => 'AAO',
            'prices' => '4',
            'photo' => '/storage/images/mini projector.jpg',
            'category' => 'Computers',
            'description' => 'Easy to bring',
            'owner' => '3',       
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Laptop',
            'brand' => 'HP',
            'prices' => '6',
            'photo' => '/storage/images/hp laptop.jpg',
            'category' => 'Computers',
            'description' => '14" screen',
            'owner' => '3',       
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

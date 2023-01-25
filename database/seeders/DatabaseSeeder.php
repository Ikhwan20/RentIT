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
            'income' => '0',
        ]);

        \App\Models\User::factory()->create([
             'name' => 'Shawal',
             'email' => 'shawal@gmail.com',
             'password' => bcrypt('Pa$$word'),
             'phone' => "0111918980",
             'email_verified_at' => '2022-12-19',
             'income' => '21',
         ]);

         \App\Models\User::factory()->create([
            'name' => 'Ikhwan',
            'email' => 'ikhwan@gmail.com',
            'password' => bcrypt('Pa$$word'),
            'phone' => "0111918556",
            'email_verified_at' => '2022-12-19',
            'income' => '32',
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Table Fan',
            'brand' => 'Midea',
            'prices' => '5',
            'photo' => '/storage/images/table fan.jpg',
            'category' => 'Furniture',
            'description' => '12" Table Fan',
            'owner' => '2',
            'income' => '5', 
            'status' => 'popular',  
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Electric Kettle',
            'brand' => 'La Gourmet',
            'prices' => '4',
            'photo' => '/storage/images/electric kettle.jpg',
            'category' => 'Kitchen & Laundry',
            'description' => 'Large capacity, boil dry protection & rapid boiling',
            'owner' => '2',  
            'income' => '8',  
            'status' => 'popular',  
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Electric Cooker',
            'brand' => 'T0R0S',
            'prices' => '4',
            'photo' => '/storage/images/electric cooker.jpg',
            'category' => 'Kitchen & Laundry',
            'description' => 'Large capacity, boil dry protection & rapid boiling',
            'owner' => '2',   
            'income' => '8',   
            'status' => 'popular',  
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'HandHeld Fan',
            'brand' => 'EasyAce',
            'prices' => '1.5',
            'photo' => '/storage/images/handheld fan.jpg',
            'category' => 'Entertainment',
            'description' => 'Handheld, easy to bring',
            'owner' => '3', 
            'income' => '3',  
            'status' => 'recommended',     
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Mini Projector',
            'brand' => 'AAO',
            'prices' => '6',
            'photo' => '/storage/images/mini projector.jpg',
            'category' => 'Computers',
            'description' => 'Easy to bring',
            'owner' => '3', 
            'income' => '12',  
            'status' => 'new',     
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Laptop',
            'brand' => 'HP',
            'prices' => '10',
            'photo' => '/storage/images/hp laptop.jpg',
            'category' => 'Computers',
            'description' => '14" screen',
            'owner' => '3',     
            'income' => '20',
            'status' => 'new',   
        ]);

        \App\Models\Utility::factory()->create([
            'name' => 'Speaker',
            'brand' => 'Sony',
            'prices' => '5.5',
            'photo' => '/storage/images/handheld fan.jpg',
            'category' => 'Entertainment',
            'description' => 'Handheld, easy to bring',
            'owner' => '2',  
            'income' => '0',  
            'status' => 'new',    
        ]);

        \App\Models\Order::factory()->create([
            'start' => '2023-01-24 12:00:00',
            'end' => '2023-01-26 12:0:00',
            'duration' => '48',
            'totalPrice' => '8',
            'active' => true,
            'ended' => false,
            'utility_id' => '2',
            'renter' => '3'       
        ]);

        \App\Models\Order::factory()->create([
            'start' => '2023-01-23 12:00:00',
            'end' => '2023-01-24 12:0:00',
            'duration' => '24',
            'totalPrice' => '5',
            'active' => false,
            'ended' => true,
            'utility_id' => '1',
            'renter' => '3'       
        ]);

        \App\Models\Order::factory()->create([
            'start' => '2023-01-26 12:00:00',
            'end' => '2023-01-28 12:0:00',
            'duration' => '48',
            'totalPrice' => '8',
            'active' => false,
            'ended' => false,
            'utility_id' => '3',
            'renter' => '3'       
        ]);

        \App\Models\Order::factory()->create([
            'start' => '2023-01-23 12:00:00',
            'end' => '2023-01-25 12:0:00',
            'duration' => '48',
            'totalPrice' => '3',
            'active' => false,
            'ended' => true,
            'utility_id' => '4',
            'renter' => '2'       
        ]);

        \App\Models\Order::factory()->create([
            'start' => '2023-01-27 12:00:00',
            'end' => '2023-01-28 12:0:00',
            'duration' => '24',
            'totalPrice' => '12',
            'active' => false,
            'ended' => false,
            'utility_id' => '5',
            'renter' => '2'       
        ]);

        \App\Models\Order::factory()->create([
            'start' => '2023-01-25 12:00:00',
            'end' => '2023-01-27 12:0:00',
            'duration' => '48',
            'totalPrice' => '20',
            'active' => true,
            'ended' => false,
            'utility_id' => '6',
            'renter' => '2'       
        ]);
    }
}

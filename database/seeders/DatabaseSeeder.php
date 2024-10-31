<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
           'name' => 'POS Kedai',
           'email' => 'kedai@gmail.com',
           'password' => Hash::make('12345678'),
           'roles' => 'admin',
        ]);

        User::create([
            'name' => 'Admin Deo',
            'email' => 'deokedai@gmail.com',
            'password' => Hash::make('11223344'),
         ]);
         $this->call(ProductSeeder::class);
    }

}

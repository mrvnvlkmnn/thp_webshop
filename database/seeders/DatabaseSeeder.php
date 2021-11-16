<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Categories::factory(1)->create();
        \App\Models\Product::factory(10)->create();

        // Inserts the Admin Account

        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),


        ]);
        DB::table('addresses')->insert([
            'user_id' => 1,
            'street_address' => 'Admin Str',
            'city' => 'Admin',
            'state' => 'Admin',
            'postal' => '12345',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

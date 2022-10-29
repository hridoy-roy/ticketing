<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Admin",
            'email' => 'admin@gmail.com',
            'phone' => '01857446931',
            'roles' => 'admin',
            'password' => Hash::make('12345678'),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\SeatMap;
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
        SeatMap::create(
            [
                'seat_no' => 1,
                'seat_value' => '1_1'
            ]);
             SeatMap::create([
                'seat_no' => 2,
                'seat_value' => '1_2'
            ]);
             SeatMap::create([
                'seat_no' => 3,
                'seat_value' => '2_2'
            ]);
             SeatMap::create([
                'seat_no' => 4,
                'seat_value' => '2_4'
            ]);
             SeatMap::create([
                'seat_no' => 5,
                'seat_value' => '2_5'
            ]);
             SeatMap::create([
                'seat_no' => 6,
                'seat_value' => '3_1'
            ]);
             SeatMap::create([
                'seat_no' => 7,
                'seat_value' => '3_2'
            ]);
             SeatMap::create([
                'seat_no' => 8,
                'seat_value' => '1_1'
            ]);
             SeatMap::create([
                'seat_no' => 9,
                'seat_value' => '3_4'
            ]);
             SeatMap::create([
                'seat_no' => 10,
                'seat_value' => '3_5'
            ]);
             SeatMap::create([
                'seat_no' => 11,
                'seat_value' => '4_1'
            ]);
             SeatMap::create([
                'seat_no' => 12,
                'seat_value' => '4_2'
            ]);
             SeatMap::create([
                'seat_no' => 13,
                'seat_value' => '4_4'
            ]);
             SeatMap::create([
                'seat_no' => 14,
                'seat_value' => '4_5'
            ]);
             SeatMap::create([
                'seat_no' => 15,
                'seat_value' => '5_1'
            ]);
             SeatMap::create([
                'seat_no' => 16,
                'seat_value' => '5_2'
            ]);
             SeatMap::create([
                'seat_no' => 17,
                'seat_value' => '5_4'
            ]);
             SeatMap::create([
                'seat_no' => 18,
                'seat_value' => '5_5'
            ]);
             SeatMap::create([
                'seat_no' => 19,
                'seat_value' => '6_1'
            ]);
             SeatMap::create([
                'seat_no' => 20,
                'seat_value' => '6_2'
            ]);
             SeatMap::create([
                'seat_no' => 21,
                'seat_value' => '6_4'
            ]);
             SeatMap::create([
                'seat_no' => 22,
                'seat_value' => '6_5'
            ]);
             SeatMap::create([
                'seat_no' => 23,
                'seat_value' => '7_1'
            ]);
             SeatMap::create([
                'seat_no' => 24,
                'seat_value' => '7_2'
            ]);
             SeatMap::create([
                'seat_no' => 25,
                'seat_value' => '7_4'
            ]);

    }
}

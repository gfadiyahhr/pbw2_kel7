<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\table;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
        [
            'name' => 'Admin Name',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin'),
        ],
            'name' => 'Regular User',
            'email' => 'user@test.com',
            'password' => Hash::make('user'),
        ]);
    }
}

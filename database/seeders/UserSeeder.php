<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456789')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Alvaro Villanueva',
            'email'=>'alvaro@gmail.com',
            'password'=>bcrypt('123456789')
        ])->assignRole('Admin');

        User::factory(0)->create();
    }
}

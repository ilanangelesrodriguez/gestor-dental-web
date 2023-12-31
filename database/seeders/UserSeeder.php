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
            'email'=>'admin@bernal.dent',
            'password'=>bcrypt('admin')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Ronald Hurtado',
            'email'=>'ronald@bernal.dent',
            'password'=>bcrypt('ronald')
        ])->assignRole('Paciente');
        User::create([
            'name'=>'Roxana Bernal',
            'email'=>'roxana@bernal.dent',
            'password'=>bcrypt('roxana')
        ])->assignRole('Admin');
        User::create([
            'name'=>'Ilan Angeles',
            'email'=>'ilan@bernal.dent',
            'password'=>bcrypt('ilan')
        ])->assignRole('Admin');
        User::create([
            'name'=>'Joseph Dueñas',
            'email'=>'joseph@bernal.dent',
            'password'=>bcrypt('dueñas')
        ])->assignRole('Admin');
        User::create([
            'name'=>'Sohell Avalos',
            'email'=>'avalos@bernal.dent',
            'password'=>bcrypt('sohell')
        ])->assignRole('Admin');
        User::create([
            'name'=>'Lucho Utrilla',
            'email'=>'utrilla@bernal.dent',
            'password'=>bcrypt('utrilla')
        ])->assignRole('Paciente');
        User::create([
            'name'=>'Mirko Ronceros',
            'email'=>'mirko@bernal.dent',
            'password'=>bcrypt('mirko')
        ])->assignRole('Paciente');
        User::factory(0)->create();
    }
}

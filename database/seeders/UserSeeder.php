<?php

namespace Database\Seeders;

use App\Enums\UserRoles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Admin",
            'username' => "admin",
            'email' => "admin@asd.asd",
            'role' => 'admin',
            'password' => Hash::make("123456")
        ]);

        User::create([
            'name' => "Admin 2",
            'username' => "admin2",
            'email' => "admin2@asd.asd",
            'role' => 'admin',
            'password' => Hash::make("123456")
        ]);
        
        User::create([
            'name' => "Farkhan",
            'username' => "farkhan",
            'email' => "farkhan@asd.asd",
            'role' => 'teacher',
            'mapel_id' => 1,
            'password' => Hash::make("123456")
        ]);

        User::create([
            'name' => "zalfa",
            'username' => "zalfa",
            'email' => "zalfa@asd.asd",
            'role' => 'teacher',
            'mapel_id' => 1,
            'password' => Hash::make("123456")
        ]);

        User::create([
            'name' => "valent",
            'username' => "valent",
            'email' => "valent@asd.asd",
            'role' => 'teacher',
            'mapel_id' => 2,
            'password' => Hash::make("123456")
        ]);

        User::create([
            'name' => "rizka",
            'username' => "rizka",
            'email' => "rizka@asd.asd",
            'role' => 'teacher',
            'mapel_id' => 3,
            'password' => Hash::make("123456")
        ]);

        User::create([
            'name'  =>'Adam Asyrof Al-hikam',
            'username'  =>'adam',
            'password'  => Hash::make("123456"),
            'role'      => 'student'
        ]);

        User::create([
            'name'  =>'Adellia Naashifa Syaharani',
            'username'  =>'adellia',
            'password'  => Hash::make("123456"),
            'role'      => 'student'
        ]);

        User::create([
            'name'  =>'Azzahrah Putri Nabila',
            'username'  =>'azzahrah',
            'password'  => Hash::make("123456"),
            'role'      => 'student'
        ]);

        User::create([
            'name'  =>'Brigitte Sinel Kefi Obehetan',
            'username'  =>'brigitte',
            'password'  => Hash::make("123456"),
            'role'      => 'student'
        ]);

        User::create([
            'name'  =>'Clairine Fahma Sania',
            'username'  =>'clairine',
            'password'  => Hash::make("123456"),
            'role'      => 'student'
        ]);

        User::create([
            'name'  =>'Dhickson Krisna Dianto',
            'username'  =>'dhickson',
            'password'  => Hash::make("123456"),
            'role'      => 'student'
        ]);

        User::create([
            'name'  =>'Kamila Mahira Herlambang',
            'username'  =>'kamila',
            'password'  => Hash::make("123456"),
            'role'      => 'student'
        ]);

        User::create([
            'name'  =>'Kezia Angela Charissa Dinaputri',
            'username'  =>'kezia',
            'password'  => Hash::make("123456"),
            'role'      => 'student'
        ]);

        User::create([
            'name'  =>'Mahyoni Izha Mahadev',
            'username'  =>'mahyoni',
            'password'  => Hash::make("123456"),
            'role'      => 'student'
        ]);

        User::create([
            'name'  =>'Manuella Ellyada',
            'username'  =>'manuella',
            'password'  => Hash::make("123456"),
            'role'      => 'student'
        ]);
    }
}

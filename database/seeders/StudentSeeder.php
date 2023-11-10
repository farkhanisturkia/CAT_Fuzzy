<?php

namespace Database\Seeders;

use App\Enums\UserRoles;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => "Adam Asyraf Al-hikam",
            'username'=> "adam",
            'password' => "123456",
            'nisn' => "1234567890",
            'kelas' => "8",
            'gender' => "Laki-Laki",
            'address' => "Sidoarjo"
        ]);
        Student::create([
            'name' => "Adellia Naashifa Syaharani",
            'username'=> "adellia",
            'password' => "123456",
            'nisn' => "1234567891",
            'kelas' => "8",
            'gender' => "Perempuan",
            'address' => "Sidoarjo"
        ]);
        Student::create([
            'name' => "Azzahrah Putri Nabila",
            'username'=> "azzahrah",
            'password' => "123456",
            'nisn' => "1234567892",
            'kelas' => "8",
            'gender' => "Perempuan",
            'address' => "Sidoarjo"
        ]);
        Student::create([
            'name' => "Brigitte Sinel Kefi Obehetan",
            'username'=> "brigitte",
            'password' => "123456",
            'nisn' => "1234567893",
            'kelas' => "8",
            'gender' => "Perempuan",
            'address' => "Sidoarjo"
        ]);
        Student::create([
            'name' => "Clairine Fahma Sania",
            'username'=> "clairine",
            'password' => "123456",
            'nisn' => "1234567894",
            'kelas' => "8",
            'gender' => "Perempuan",
            'address' => "Sidoarjo"
        ]);
        Student::create([
            'name' => "Dhickson Krisna Dianto",
            'username'=> "dhickson",
            'password' => "123456",
            'nisn' => "1234567895",
            'kelas' => "8",
            'gender' => "Laki-Laki",
            'address' => "Sidoarjo"
        ]);
        Student::create([
            'name' => "Kamila Mahira Herlambang",
            'username'=> "kamila",
            'password' => "123456",
            'nisn' => "1234567896",
            'kelas' => "8",
            'gender' => "Perempuan",
            'address' => "Sidoarjo"
        ]);
        Student::create([
            'name' => "Kezia Angela Charissa Dinaputri",
            'username'=> "kezia",
            'password' => "123456",
            'nisn' => "1234567897",
            'kelas' => "8",
            'gender' => "Perempuan",
            'address' => "Sidoarjo"
        ]);
        Student::create([
            'name' => "Mahyoni Izha Mahadev",
            'username'=> "mahyoni",
            'password' => "123456",
            'nisn' => "1234567898",
            'kelas' => "8",
            'gender' => "Perempuan",
            'address' => "Sidoarjo"
        ]);
        Student::create([
            'name' => "Manuella Ellyada",
            'username'=> "manuella",
            'password' => "123456",
            'nisn' => "1234567899",
            'kelas' => "8",
            'gender' => "Perempuan",
            'address' => "Sidoarjo"
        ]);
    }
}

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
            'user_id'   => "7",
            'nisn'      => "1234567890",
            'kelas'     => "8",
            'gender'    => "Laki-Laki",
            'address'   => "Sidoarjo"
        ]);
        Student::create([
            'user_id'   => "8",
            'nisn'      => "1234567891",
            'kelas'     => "8",
            'gender'    => "Perempuan",
            'address'   => "Sidoarjo"
        ]);
        Student::create([
            'user_id'   => "9",
            'nisn'      => "1234567892",
            'kelas'     => "8",
            'gender'    => "Perempuan",
            'address'   => "Sidoarjo"
        ]);
        Student::create([
            'user_id'   => "10",
            'nisn'      => "1234567893",
            'kelas'     => "8",
            'gender'    => "Perempuan",
            'address'   => "Sidoarjo"
        ]);
        Student::create([
            'user_id'   => "11",
            'nisn'      => "1234567894",
            'kelas'     => "8",
            'gender'    => "Perempuan",
            'address'   => "Sidoarjo"
        ]);
        Student::create([
            'user_id'   => "12",
            'nisn'      => "1234567895",
            'kelas'     => "8",
            'gender'    => "Laki-Laki",
            'address'   => "Sidoarjo"
        ]);
        Student::create([
            'user_id'   => "13",
            'nisn'      => "1234567896",
            'kelas'     => "8",
            'gender'    => "Perempuan",
            'address'   => "Sidoarjo"
        ]);
        Student::create([
            'user_id'   => "14",
            'nisn'      => "1234567897",
            'kelas'     => "8",
            'gender'    => "Perempuan",
            'address'   => "Sidoarjo"
        ]);
        Student::create([
            'user_id'   => "15",
            'nisn'      => "1234567898",
            'kelas'     => "8",
            'gender'    => "Perempuan",
            'address'   => "Sidoarjo"
        ]);
        Student::create([
            'user_id'   => "16",
            'nisn'      => "1234567899",
            'kelas'     => "8",
            'gender'    => "Perempuan",
            'address'   => "Sidoarjo"
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exam::create([
            'name' => 'Latihan 1',
            'timer' => 10,
            'timer_per_question' => 120,
            'total_question' => 10,
            'is_active' => true
        ]);
    }
}

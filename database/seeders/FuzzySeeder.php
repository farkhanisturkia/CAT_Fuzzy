<?php

namespace Database\Seeders;

use App\Models\Exam;
use App\Models\Fuzzy;
use App\Models\Mapel;
use App\Models\Student;
use App\Models\ExamStudent;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FuzzySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Exam $exam, ExamStudent $examStudent, Student $student, Mapel $mapel): void
    {
        Fuzzy::create([
            'student_id'    => 1,
            'mapel_id'      => 1,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 1,
            'mapel_id'      => 2,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 1,
            'mapel_id'      => 3,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 2,
            'mapel_id'      => 1,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 2,
            'mapel_id'      => 2,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 2,
            'mapel_id'      => 3,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 3,
            'mapel_id'      => 1,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 3,
            'mapel_id'      => 2,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 3,
            'mapel_id'      => 3,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 4,
            'mapel_id'      => 1,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 4,
            'mapel_id'      => 2,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 4,
            'mapel_id'      => 3,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 5,
            'mapel_id'      => 1,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 5,
            'mapel_id'      => 2,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 5,
            'mapel_id'      => 3,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 6,
            'mapel_id'      => 1,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 6,
            'mapel_id'      => 2,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 6,
            'mapel_id'      => 3,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 7,
            'mapel_id'      => 1,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 7,
            'mapel_id'      => 2,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 7,
            'mapel_id'      => 3,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 8,
            'mapel_id'      => 1,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 8,
            'mapel_id'      => 2,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 8,
            'mapel_id'      => 3,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 9,
            'mapel_id'      => 1,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 9,
            'mapel_id'      => 2,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 9,
            'mapel_id'      => 3,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 10,
            'mapel_id'      => 1,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 10,
            'mapel_id'      => 2,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
        Fuzzy::create([
            'student_id'    => 10,
            'mapel_id'      => 3,
            'JSSedikit'     => 0,
            'JSSedang'      => 0,
            'JSBanyak'      => 0,
            'NHRendah'      => 0,
            'NHSedang'      => 0,
            'NHTinggi'      => 0,
            // 'JSSedikit'     => min([$exam->total_question]),
            // 'JSSedang'      => array_sum([$exam->total_question]) / count([$exam->total_question]),
            // 'JSBanyak'      => max([$exam->total_question]),
            // 'NHRendah'      => min([$examStudent->final_score]),
            // 'NHSedang'      => array_sum([$examStudent->final_score]) / count([$examStudent->final_score]),
            // 'NHTinggi'      => max([$examStudent->final_score]),
            'KMPKurang'     => 0,
            'KMPSedang'     => 0,
            'KMPTinggi'     => 0,
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Student;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController2 extends Controller
{
    public function showQuestions(Exam $exam, Student $student)
    {
        $questions = $this->generateQuestions($student->kemampuan, 10);

        return view('questions.show', compact('questions'));
    }

    private function generateQuestions($kemampuan, $limit)
    {
        $levels = ['Mudah', 'Sedang', 'Sulit'];
        $percentages = [
            'Tinggi' => [20, 30, 50],
            'Sedang' => [20, 50, 30],
            'Rendah' => [50, 30, 20],
        ];

        $levelCounts = [];
        foreach ($levels as $i => $level) {
            $levelCounts[$level] = floor($limit * $percentages[$kemampuan][$i] / 100);
        }

        $questions = [];
        foreach ($levels as $level) {
            for ($i = 1; $i <= $levelCounts[$level]; $i++) {
                $questions[] = [
                    'soal' => "Soal {$level} {$i}",
                    'level' => $level,
                ];
            }
        }

        shuffle($questions);
        return $questions;
    }
}
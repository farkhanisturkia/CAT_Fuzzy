<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Fuzzy;
use App\Models\Student;
use App\Models\ExamStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;
use App\Http\Controllers\Controller;

class FuzzyController extends Controller
{

    // public function create()
    // {
    //     $datapengguna  = 'active';
    //     $titlepage     = 'Data Pengguna';
    //     return view('user.create', compact('datapengguna', 'titlepage'));
    // }

    public function index()
    {
        $data = ['students' => Student::with(['user'])->get()];

        return view('fuzzy.index', $data);
    }


    /**
     * Display the specified resource.
     */
    public function show(Exam $exam, Student $student)
    {
        $examStudent = ExamStudent::with('questions')->where('student_id', $student->id)->get();

        //------------------ Deklarasi fuzzy
        // Jumlah soal
        $Exam = Exam::get();
        $max2 = $Exam->max('total_question');
        $min2 = $Exam->min('total_question');
        $sum2 = $Exam->sum('total_question');
        $count2 = $Exam->count('total_question');
        $mean2 = $sum2 / $count2;
        $end2    = Exam::select('total_question')->orderBy('id','desc')->limit(1)->first()->total_question;
        // $end2    = DB::table('exams as e')->select(
        //     'e.total_question as tq'
        //     )
        //     ->leftjoin('exam_student as es','es.exam_id','=','e.id')
        //     ->orderBy('es.id','desc')
        //     ->limit(1)
        //     ->first()->total_question;

        // Nilai Hasil
        $ExamStudent = ExamStudent::where('student_id', $student->id);
        $max = $ExamStudent->max('final_score');
        $min = $ExamStudent->min('final_score');
        $sum = $ExamStudent->sum('final_score');
        $count = $ExamStudent->count('final_score');
        $mean = $sum / $count;
        $end    = ExamStudent::where('student_id', $student->id)->select('final_score')->orderBy('id','desc')->limit(1)->first()->final_score;
        
        // Kemampuan

        // ------------------ fuzzifikasi
        // Jumlah Soal
        if ($end2 < $min2) {
            $JSSedikit  = 1;
            $JSSedang   = 0;
            $JSBanyak   = 0;
        }
        else if ($end2 >= $min2 && $end2 < $mean2) {
            $JSSedikit  = ($mean2 - $end2)     /   ($mean2 - $min2);
            $JSSedang   = ($end2 - $min2)    /   ($mean2 - $min2);
            $JSBanyak   = 0;
        }
        else if ($end2 >= $mean2 && $end2 < $max2) {
            $JSSedikit  = 0;
            $JSSedang   = ($max2 - $end2)    /   ($max2 - $mean2);
            $JSBanyak   = ($end2 - $mean2)    /   ($max2 - $mean2);
        }
        else if ($end2 >= $max2) {
            $JSSedikit  = 0;
            $JSSedang   = 0;
            $JSBanyak   = 1;
        }

        // Nilai Hasil
        if ($end < $min) {
            $NHRendah  = 1;
            $NHSedang   = 0;
            $NHTinggi   = 0;
        }
        else if ($end >= $min && $end < $mean) {
            $NHRendah  = ($mean - $end)     /   ($mean - $min);
            $NHSedang   = ($end - $min)    /   ($mean - $min);
            $NHTinggi   = 0;
        }
        else if ($end >= $mean && $end < $max) {
            $NHRendah  = 0;
            $NHSedang   = ($max - $end)    /   ($max - $mean);
            $NHTinggi   = ($end - $mean)    /   ($max - $mean);
        }
        else if ($end >= $max) {
            $NHRendah  = 0;
            $NHSedang   = 0;
            $NHTinggi   = 1;
        }

        // -------------------- Inferensi
        // rule base
        $rule1 = min($JSSedikit,$NHTinggi); //KMPSedang
        $rule2 = min($JSSedikit,$NHSedang); //KMPKurang
        $rule3 = min($JSSedikit,$NHRendah); //KMPKurang
        $rule4 = min($JSSedang,$NHTinggi); //KMPTinggi
        $rule5 = min($JSSedang,$NHSedang); //KMPSedang
        $rule6 = min($JSSedang,$NHRendah); //KMPKurang
        $rule7 = min($JSBanyak,$NHTinggi); //KMPTinggi
        $rule8 = min($JSBanyak,$NHSedang); //KMPTinggi
        $rule9 = min($JSBanyak,$NHRendah); //KMPSedang

        $KMPKurang = 100;
        $KMPSedang = 150;
        $KMPTinggi = 200;
        $MedKS = ($KMPKurang + $KMPSedang) / 2;
        $MedST = ($KMPSedang + $KMPTinggi) / 2;

        //-------------------- Defuzifikasi
        $KMP1 = ($rule2 * $KMPKurang) + ($rule3 * $KMPKurang) + ($rule6 * $KMPKurang);
        $KMP2 = ($rule1 * $KMPSedang) + ($rule5 * $KMPSedang) + ($rule9 * $KMPSedang);
        $KMP3 = ($rule4 * $KMPTinggi) + ($rule7 * $KMPTinggi) + ($rule8 * $KMPTinggi);
        $KMPTotal = $KMP1 + $KMP2 + $KMP3;

        $DEF1 = $rule2 + $rule3 + $rule6;
        $DEF2 = $rule1 + $rule5 + $rule9;
        $DEF3 = $rule4 + $rule7 + $rule8;
        $DEFTotal = $DEF1 + $DEF2 + $DEF3;

        $Output = $KMPTotal / $DEFTotal;

        if ($Output <= $MedKS) {
            $Kemampuan = 'Kemampuan Kurang';
        }
        elseif($Output > $MedKS && $Output <= $MedST){
            $Kemampuan =  'Kemampuan Sedang';
        }
        elseif($Output > $MedST){
            $Kemampuan =  'Kemampuan Tinggi';
        }
        
        $data = [
            'fuzzy'         => $examStudent,
            'max'           => $max,
            'min'           => $min,
            'mean'          => $mean,
            'max2'          => $max2,
            'min2'          => $min2,
            'mean2'         => $mean2,
            'last2'         => $end2,
            'last'          => $end,
            'JSSedikit'     => $JSSedikit,
            'JSSedang'      => $JSSedang,
            'JSBanyak'      => $JSBanyak,
            'NHRendah'      => $NHRendah,
            'NHSedang'      => $NHSedang,
            'NHTinggi'      => $NHTinggi,
            'rule1'         => $rule1,
            'rule2'         => $rule2,
            'rule3'         => $rule3,
            'rule4'         => $rule4,
            'rule5'         => $rule5,
            'rule6'         => $rule6,
            'rule7'         => $rule7,
            'rule9'         => $rule8,
            'rule8'         => $rule9,
            'KMP1'          => $KMP1,
            'KMP2'          => $KMP2,
            'KMP3'          => $KMP3,
            'KMPTotal'      => $KMPTotal,
            'DEF1'          => $DEF1,
            'DEF2'          => $DEF2,
            'DEF3'          => $DEF3,
            'DEFTotal'      => $DEFTotal,
            'Output'        => $Output,
            'Kemampuan'     => $Kemampuan
        ];
        
        return view('fuzzy.show', $data);
    }
}

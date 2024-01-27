<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuzzy extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'mapel_id',
        'JSSedikit',
        'JSSedang',
        'JSBanyak',
        'NHSedikit',
        'NHSedang',
        'NHTinggi',
        'KMPKurang',
        'KMPSedang',
        'KMPTinggi',
    ];

    public function fuzzi(Exam $exam, ExamStudent $examStudent){

        $fuzzy = Fuzzy::get();

        foreach ($fuzzy as $fuzzy) {
            // jumlah soal
            if ($exam->total_question <= $fuzzy->JSSedikit) {
                $JSSedikit  = 1;
                $JSSedang   = 0;
                $JSBanyak   = 0;
            }
            else if ($exam->total_question > $fuzzy->JSSedikit && $exam->total_question <= $fuzzy->JSSedang) {
                $JSSedikit  = ($fuzzy->JSSedang - $exam->total_question)     /   ($fuzzy->JSSedang - $fuzzy->JSSedikit);
                $JSSedang   = ($exam->total_question - $fuzzy->JSSedikit)    /   ($fuzzy->JSSedang - $fuzzy->JSSedikit);
                $JSBanyak   = 0;
            }
            else if ($exam->total_question > $fuzzy->JSSedang && $exam->total_question <= $fuzzy->JSBanyak) {
                $JSSedikit  = 0;
                $JSSedang   = ($fuzzy->JSBanyak - $exam->total_question)    /   ($fuzzy->JSBanyak - $fuzzy->JSSedang);
                $JSBanyak   = ($exam->total_question - $fuzzy->JSSedang)    /   ($fuzzy->JSBanyak - $fuzzy->JSSedang);
            }
            else if ($exam->total_question > $fuzzy->JSSedikit) {
                $JSSedikit  = 0;
                $JSSedang   = 0;
                $JSBanyak   = 1;
            }

            // Nilai Hasil
            if ($examStudent->final_score <= $fuzzy->NHRendah) {
                $NHRendah  = 1;
                $NHSedang   = 0;
                $NHTinggi   = 0;
            }
            else if ($examStudent->final_score > $fuzzy->NHRendah && $examStudent->final_score <= $fuzzy->NHSedang) {
                $NHRendah  = ($fuzzy->NHSedang - $examStudent->final_score)     /   ($fuzzy->NHSedang - $fuzzy->NHRendah);
                $NHSedang   = ($examStudent->final_score - $fuzzy->NHRendah)    /   ($fuzzy->NHSedang - $fuzzy->NHRendah);
                $NHTinggi   = 0;
            }
            else if ($examStudent->final_score > $fuzzy->NHSedang && $examStudent->final_score <= $fuzzy->NHTinggi) {
                $NHRendah  = 0;
                $NHSedang   = ($fuzzy->NHTinggi - $examStudent->final_score)    /   ($fuzzy->NHTinggi - $fuzzy->NHSedang);
                $NHTinggi   = ($examStudent->final_score - $fuzzy->NHSedang)    /   ($fuzzy->NHTinggi - $fuzzy->NHSedang);
            }
            else if ($examStudent->final_score > $fuzzy->NHTinggi) {
                $NHRendah  = 0;
                $NHSedang   = 0;
                $NHTinggi   = 1;
            }

            // -------------------- Inferensi
            // rule base
            $rule1 = min($JSSedikit,$NHRendah);
            $rule2 = min($JSSedikit,$NHSedang);
            $rule3 = min($JSSedikit,$NHTinggi);
            $rule4 = min($JSSedang,$NHRendah);
            $rule5 = min($JSSedang,$NHSedang);
            $rule6 = min($JSSedang,$NHTinggi);
            $rule7 = min($JSBanyak,$NHRendah);
            $rule8 = min($JSBanyak,$NHSedang);
            $rule9 = min($JSBanyak,$NHTinggi);

            // 
        } 
    }

    public function mapel(){
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    public function student(){
        return $this->belongsTo(Student::class, 'student_id');
    }
}

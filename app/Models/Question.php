<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'question',
        'multiple_choice',
        'index',
        'answer',
        'category',
    ];

    protected $casts = [
        'multiple_choice' => 'object',
    ];

    public function scopeStartingQuestion(Builder $query): void
    {
        // $query->where('index', 1);
        $query->where('index', rand(1,5));
    }


    /**
     * Scope a query to get next question.
     */

    public function scopeNextQuestion(Builder $query, $answeredQuestion, $newIndex, $questions): void
    {
        // if ($newIndex <= 0) {
        //     $query->whereNotIn('id', $answeredQuestion->pluck('question_id'))
        //         ->where('index', 1);
        //      ->inRandomOrder();
        // }
        // if ($newIndex >= max($questions->question->index)){
        //     $query->whereNotIn('id', $answeredQuestion->pluck('question_id'))
        //         ->where('index', $newIndex - max($questions->question->index));
        // //      ->inRandomOrder();
        // }
        // else{
        //     $query->whereNotIn('id', $answeredQuestion->pluck('question_id'))
        //         ->where('index', $newIndex);
        // //         // ->inRandomOrder();
        // }
        $query->whereNotIn('id', $answeredQuestion->pluck('question_id'))
                ->where('index', $newIndex);
    }

    public function bab(){
        return $this->belongsTo(Bab::class, 'bab_id');
    }

    // public function scopeNextQuestion(Builder $query, $answeredQuestion, $newValue): void
    // {
    //     $query->whereNotIn('id', $answeredQuestion->pluck('question_id'))
    //             ->where('value', $newValue)
    //             ->inRandomOrder();
    // }
}

<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class AdaptiveTestingController extends Controller
{
    public function show()
    {
        // $fuzzyLevel = "tinggi";
        $fuzzyLevel = Auth::user()->student->fuzzyLevel;
        $numberOfQuestions = 10;

        $question = $this->getQuestions($fuzzyLevel, $numberOfQuestions);
        // return view('adaptive-testing', compact('questions'));
    }

    protected function getQuestions($fuzzyLevel, $numberOfQuestions)
    {
        $questions = Question::all();

        $difficultyLevels = ['Mudah', 'Sedang', 'Sulit'];

        $questionsByDifficultyLevel = [];
        foreach ($difficultyLevels as $difficultyLevel) {
            $questionsByDifficultyLevel[$difficultyLevel] = $questions->filter(function ($question) use ($difficultyLevel) {
                return $question->category == $difficultyLevel;
            });
        }

        $questions = [];
        $currentQuestionId = null;
        for ($i = 0; $i < $numberOfQuestions; $i++) {
            if ($i == 0) {
                $currentQuestionId = $questionsByDifficultyLevel[$difficultyLevel]->random()->id;
            } else {
                $currentQuestionId = $this->getNextQuestionId($fuzzyLevel, $currentQuestionId, $difficultyLevel, $questionsByDifficultyLevel);
            }

            $questions[] = $questionsByDifficultyLevel[$difficultyLevel]->find($currentQuestionId);
        }

        return $questions;
    }

    protected function getNextQuestionId($fuzzyLevel, $currentQuestionId, $difficultyLevel, $questionsByDifficultyLevel)
    {
        $difficulty = $questionsByDifficultyLevel[$difficultyLevel]->find($currentQuestionId);

        $nextQuestionId = $currentQuestionId + $this->getIncrease($difficulty, $fuzzyLevel);

        if ($nextQuestionId > $questionsByDifficultyLevel[$difficulty]->max()) {
            $nextQuestionId = $questionsByDifficultyLevel[$difficulty]->first()->id;
        }

        return $nextQuestionId;
    }

    protected function getIncrease($difficulty, $fuzzyLevel)
    {
        switch ($fuzzyLevel) {
            case "tinggi":
                $percentages = [50, 30, 20];
                break;
            case "sedang":
                $percentages = [20, 50, 30];
                break;
            default:
                $percentages = [20, 30, 50];
                break;
        }

        $increase = 0;
        for ($i = 0; $i < $difficulty; $i++) {
            $increase += $percentages[$i];
        }

        return $increase;
    }
}
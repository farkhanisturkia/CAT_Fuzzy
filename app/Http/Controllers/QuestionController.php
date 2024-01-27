<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Question;
use App\Models\Bab;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Bab $bab)
    {
        $questions = Question::where('bab_id', $bab->id)->latest()->get();

        $data = [
            'questions' => $questions
        ];
        return view('question.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        return view('question.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionRequest $request)
    {
        // dd($request->all());
        $question = Question::create([
            'user_id'               => $request->user_id,
            'question'              => $request->question,
            'index'                 => $request->index, 
            'category'              => $request->category, 
            'multiple_choice'       => $request->multiple_choice,
            'answer'                => $request->answer,
        ]);

        if($question){
            return redirect()->back()->with(['success' => 'Data Soal baru berhasil ditambahkan!']);
        }else{
            return redirect()->back()->with(['failed' => 'Data soal gagal ditambahkan!']);
        }
        // try {
        //     Question::create($request->validated());

        //     return redirect()->back()->with(['success' => 'Soal baru berhasil ditambahkan']);
        // }

        // catch (Exception $e) {
        //     return redirect()->back()->with(['failed' => 'Data telah ada atau tidak sesuai silahkan dicek kembali']);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        $data = [
            'question' => $question
        ];
        return view('question.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        try {
            $question->update($request->validated());

            return redirect()->back()->with(['success' => 'Data soal berhasil diubah']);
        }

        catch (Exception $e) {
            return redirect()->back()->with(['failed' => 'Data soal tidak berhasil diubah']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        if (!$question) {
            return redirect()->route('question.index')->with(['failed' => 'Soal tidak berhasil dihapus']);
        }

        $question->delete();
        return redirect()->route('question.index')->with(['success' => 'Soal berhasil dihapus']);
    }
}

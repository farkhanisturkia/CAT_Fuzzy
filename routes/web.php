<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BabController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FuzzyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuestionController2;
use App\http\Controllers\AdaptiveTestingController;
use App\Http\Controllers\ExamStudentQuestionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/login', [AuthController::class, 'authenthicate'])->middleware('guest');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // User Routes
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
        Route::put('/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
    });

    // Student Routes
    Route::prefix('student')->name('student.')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('index');
        Route::get('/create', [StudentController::class, 'create'])->name('create');
        Route::post('/', [StudentController::class, 'store'])->name('store');
        Route::get('/edit/{student}', [StudentController::class, 'edit'])->name('edit');
        Route::put('/{student}', [StudentController::class, 'update'])->name('update');
        Route::delete('/{student}', [StudentController::class, 'destroy'])->name('destroy');
    });

    // Bab Route
    Route::prefix('bab')->name('bab.')->group(function () {
        Route::get('/', [BabController::class, 'index'])->name('index');
        Route::get('/create', [BabController::class, 'create'])->name('create');
        Route::post('/', [BabController::class, 'store'])->name('store');
        Route::get('/edit/{bab}', [BabController::class, 'edit'])->name('edit');
        Route::put('/{bab}', [BabController::class, 'update'])->name('update');
        Route::delete('/{bab}', [BabController::class, 'destroy'])->name('destroy');
    });

    // Question Routes
    Route::prefix('question')->name('question.')->group(function () {
        Route::get('/{bab}', [QuestionController::class, 'index'])->name('index');
        Route::get('/create', [QuestionController::class, 'create'])->name('create');
        Route::post('/', [QuestionController::class, 'store'])->name('store');
        Route::get('/edit/{question}', [QuestionController::class, 'edit'])->name('edit');
        Route::put('/{question}', [QuestionController::class, 'update'])->name('update');
        Route::delete('/{question}', [QuestionController::class, 'destroy'])->name('destroy');
    });

    // Exam Routes
    Route::prefix('exam')->name('exam.')->group(function () {
        Route::get('/', [ExamController::class, 'index'])->name('index');
        Route::get('/create', [ExamController::class, 'create'])->name('create');
        Route::get('/{exam}', [ExamController::class, 'show'])->name('show');
        Route::post('/', [ExamController::class, 'store'])->name('store');
        Route::get('/edit/{exam}', [ExamController::class, 'edit'])->name('edit');
        Route::put('/{exam}', [ExamController::class, 'update'])->name('update');
        Route::delete('/{exam}', [ExamController::class, 'destroy'])->name('destroy');
    });

    //fuzzy Route
    Route::prefix('fuzzy')->name('fuzzy.')->group(function(){
        Route::get('/', [FuzzyController::class, 'index'])->name('index');
        Route::get('/{student}', [FuzzyController::class, 'show'])->name('show');
    });

    // ExamStudentQuestion Routes
    Route::prefix('examstudentquestion')->name('examstudentquestion.')->group(function () {
        Route::put('/{examStudentQuestion}', [ExamStudentQuestionController::class, 'update'])->name('update');
    });

    // Route::prefix('adaptive')->name('adaptive.')->group(function () {
    //     Route::get('/{exam}', [AdaptiveTestingController::class, 'show'])->name('show');
    // });

});
// Route::get('questions/{student}', [QuestionController2::class, 'showQuestions']);

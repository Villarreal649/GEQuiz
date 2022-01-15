<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
});

Auth::routes([
    'register'=>false,
    'reset'=>false,
    'verify'=>false
]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user/quiz/{quizId}', [App\Http\Controllers\ExamController::class, 'getQuizQuestions'])->middleware('auth');


Route::group(['middleware'=> 'isAdmin'],function () {
    Route::get('/', function () {
        return view('backend.admin.index');
    });
    Route::resource('quiz', QuizController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('user', UserController::class);
    //assign exam
    Route::get('exam/assign', [App\Http\Controllers\ExamController::class, 'create'])->name('user.exam');
    Route::post('exam/assign', [App\Http\Controllers\ExamController::class, 'assignExam'])->name('exam.assign');
    Route::get('exam/user', [App\Http\Controllers\ExamController::class, 'userExam'])->name('view.exam');
    Route::post('exam/remove', [App\Http\Controllers\ExamController::class, 'removeExam'])->name('exam.remove');
    //Route::get('/quiz/{id}/questions','QuizController@question')->name('quiz.question');
    Route::get('/quiz/{id}/questions', [App\Http\Controllers\QuizController::class, 'question'])->name('quiz.question');
    /* Route::post('exam/user', function ($id) {
        
    }); */

});


<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Question;

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
    return view('welcome');
});

Route::get('/quiz', function () {
	$question = Question::select('id', 'question', 'options')->inRandomOrder()->first();
	return view('questions', compact('question'));
})->name('questions');

Route::post('/check', function (Request $request) {
	$question = Question::findOrFail($request->id);
	if ($question->answer == $request->answer) {
		return response()->json(array('status' => 'correct', 'explation' => $question->explation));
	}
	else {
		return response()->json(array('status' => 'incorrect', 'correct_answer' => $question->answer, 'explation' => $question->explation));
	}
})->name('check');

Route::post('/quiz/next', function (Request $request) {
	$question = Question::select('id', 'question', 'options')->inRandomOrder()->whereNotIn('id', $request->ids)->first();
	$options = $question->options();

	return response()->json(array('$question' => $question, 'options' => $options));
})->name('next');
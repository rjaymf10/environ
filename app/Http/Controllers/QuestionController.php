<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{

    public function quiz()
    {
    	$bool = true;
    	while($bool) {
    		$question = Question::select('id', 'question', 'options')->inRandomOrder()->first();
    		if ($question) {
    			$bool = false;
    		}
    	}
		return view('questions', compact('question'));
    }

    public function check(Request $request)
    {
    	$question = Question::findOrFail($request->id);
		if ($question->answer == $request->answer) {
			return response()->json(array('status' => 'correct', 'explation' => $question->explation));
		}
		else {
			return response()->json(array('status' => 'incorrect', 'correct_answer' => $question->answer, 'explation' => $question->explation));
		}
    }

    public function next(Request $request)
    {
    	$bool = true;
    	$ids = array();
		foreach ($request->ids as $id) {
			$ids[] = $id;
		}
		while($bool) {
    		$question = Question::select('id', 'question', 'options')->inRandomOrder()->whereNotIn('id', $ids)->first();
      		if ($question) {
    			$bool = false;
    		}
    	}
		
		return response()->json(array('question' => $question, 'options' => $question->options));
    }
}

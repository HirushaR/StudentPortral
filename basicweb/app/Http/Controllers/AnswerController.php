<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function create()
    {
        $user= Auth::user()->id;
        $answer =new Answer();
        $answer->user_id=$user;
        $answer->question_id =\request('question_id');
        $answer->body= \request('useranswer');
        $answer->save();
        return back();
    }
    public function getAllAnswers()
    {
        $qs = Question::get()->last()->id;
       $answer= Answer::get()->where('question_id',$qs);
        return view('questions.Answers', compact('answer'));
    }

}

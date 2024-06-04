<?php

namespace App\Http\Controllers\Prospect;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function index(){
        if (Auth::user()->role->name == 'Admin'){
            return view('admin.quiz.result-page')->with('results',Result::join('quizzes','results.quiz_id','quizzes.id')
                ->join('users','results.user_id','=','users.id')
                ->get());
        }
        return view('Prospect.quiz.result-page')->with('results',Result::join('quizzes','results.quiz_id','quizzes.id')
            ->where('user_id',Auth::user()->id)->get());
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    //
    public function index($id)
    {
        // dd($id);

        $data = Question::join('reponses', 'questions.id', '=', 'reponses.question_id')
            ->where('questions.formulaire_id', $id)
            ->select('questions.lib_question', 'reponses.question_id', 'reponses.lib_reponse', 'reponses.correct')
            ->get();

        // dd($data);

        return view('pages.question', compact('data'));
    }
}

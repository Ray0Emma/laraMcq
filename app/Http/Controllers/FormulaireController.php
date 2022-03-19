<?php

namespace App\Http\Controllers;

use App\Models\Formulaire;
use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    //
    public function index()
    {
        //
        $data = Formulaire::all();

        return view('pages.index', compact('data'));
    }
}

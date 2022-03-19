<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReponseController extends Controller
{
    private static $score = 0;
    public function index()
    {
        //
        // dd($_POST);
        foreach ($_POST as $scr) {
            if ($scr) {
                $note = self::$score++;
            }
        }
        $size = sizeOf($_POST);

        return view('pages.reponse', compact('note', 'size'));
    }
}

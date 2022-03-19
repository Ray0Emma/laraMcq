<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReponseController;

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

// Route::get('/', function () {
//     return view('pages.index');
// });


Route::get('/', [FormulaireController::class, 'index']);
Route::get('/questions/{id}', [QuestionController::class, 'index'])->name('question.index');
Route::post('/reponse', [ReponseController::class, 'index'])->name('reponse.index');

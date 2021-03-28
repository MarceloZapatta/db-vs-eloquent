<?php

use App\Aluno;
use DebugBar\DebugBar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/db', function () {
    $alunos = DB::table('alunos as a')
        ->leftJoin('aluno_turmas as at', 'at.aluno_id', 'a.id')
        ->get();

    return view('welcome.alunos')
        ->with(compact('alunos'));
});

Route::get('/eloquent', function () {

    $alunos = DB::table('alunos as a')
        ->leftJoin('aluno_turmas as at', 'at.aluno_id', 'a.id')
        ->get();
    $alunos = Aluno::with('turmas')
        ->get();

    return view('welcome.alunos')
        ->with(compact('alunos'));
});


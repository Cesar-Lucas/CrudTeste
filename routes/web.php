<?php

/* use GuzzleHttp\Psr7\Request; */

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validator;
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
use App\Models\Aluno;

Route::get('/', function () {
    return view('index');
});



Route::get('/cadastrar-aluno', function () {
    return view('cadastrar');
});

Route::post('/cadastrar-aluno', function(Request $request){

  
    $request->validate([
        'nome' => ['required', 'min:5'],
        'contato' => ['required', 'min:9', 'max:9', 'Numeric'],
        'email' => ['required', 'email:rfc,dns'],
    ]);

    Aluno::create([
        'nome' => $request->nome,
        'contato' => $request->contato,
        'email' => $request->email
    ]);
    return view('index');
});




Route::get('/ver-cadastros', function(){
    $alunos = Aluno::all();
    return view('listaAlunos', ['alunos' => $alunos]);
});

/* Route::get('/ver-cadastros', [AlunoController::class, 'index'])->name('aluno.index'); */

Route::get('/ver-aluno/{id}', function($id){
    $aluno = Aluno::find($id);
    return view('ver', ['aluno'=>$aluno]);
});



Route::get('/editar-aluno/{id}', function($id){
    $aluno = Aluno::find($id);
    return view('editar', ['aluno'=>$aluno]);
});

Route::post('/editar-aluno/{id}', function(Request $request, $id){
    
    $request->validate([
        'nome' => ['required', 'min:5'],
        'contato' => ['required', 'min:9', 'max:9'],
        'email' => ['required', 'email:rfc,dns'],
    ]);

    $aluno = Aluno::find($id);

    $aluno->update([
        'nome' => $request->nome,
        'contato' => $request->contato,
        'email' => $request->email
    ]);

    return view('ver', ['aluno'=>$aluno]);
});




Route::get('/deletar-cadastro/{id}', function($id){
    Aluno::find($id)->delete();
});
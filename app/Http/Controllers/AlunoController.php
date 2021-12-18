<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;

class AlunoController extends Controller
{
    /* public function index (Request $request){
        $alunos = Aluno::get();
        return view('listaAlunos', compact('alunos'));
    }

    public function delete($id){
        
    } */


    static function validacao(Request $request){
        $request->validate([
            'nome' => ['required', 'min:5'],
            'contato' => ['required', 'min:9', 'max:9', 'Numeric'],
            'email' => ['required', 'email:rfc,dns'],
        ]);
    }

}

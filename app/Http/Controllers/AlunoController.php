<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index (Request $request){
        $alunos = Aluno::get();
        return view('listaAlunos', compact('alunos'));
    }

    public function delete($id){
        
    }
}

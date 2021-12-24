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
    public function index()
    {
        # code...
    }
    public function create()
    {
        
        return view('cadastrar');
    }
    public function store(Request $request)
    {
        # code...
    }
    public function update(Request $request, $id)
    {
        # code...
    }
    public function show($id)
    {
        # code...
    }
    public function edit($id)
    {
        # code...
    }

    public function destroy($id)
    {
        # code...
    }

    static function validacao(Request $request){
        $request->validate([
            'nome' => ['required', 'min:5'],
            'contato' => ['required', 'min:9', 'max:9', 'Numeric'],
            'email' => ['required', 'email:rfc,dns'],
        ]);
    }

}

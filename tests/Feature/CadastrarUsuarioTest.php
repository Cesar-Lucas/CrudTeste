<?php

namespace Tests\Feature;
use App\Models\Aluno;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;


class CadastrarUsuarioTest extends TestCase
{
    /** @test */
    public function ApenasUsuariosLogadosPodemCadastrarAlunos()
    {
        $response = $this->get('/cadastrar-aluno')
            ->assertRedirect('/login');
    }

    /** @test */
    public function ApenasUsuariosLogadosPodemExcluirAlunos()
    {
        $response = $this->get('/deletar-cadastro/1')
            ->assertRedirect('/login');
    }

     /** @test */
    public function ApenasUsuariosLogadosPodemEditarAlunos()
    {
        $response = $this->get('/editar-aluno/1')
            ->assertRedirect('/login');
    }

     /** @test */
    public function ApenasUsuariosLogadosPodemVerDadosDoAluno()
    {
        $response = $this->get('/ver-aluno/1')
            ->assertRedirect('/login');
    }

}

<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Aluno;

class CadastrarAlunoTest extends DuskTestCase
{
     /** @test */
     public function ChecarSeOsDadosCadastradosSaoValidos(){
        $this->browse(function(Browser $browser)
        {
            $browser->visit(url: 'http://127.0.0.1:8000/cadastrar-aluno')
                 ->type(field: 'nome', value: 'cesar')
                 ->type(field:'contato', value: '981704209')
                 ->type(field:'email', value: 'cesar@gmail.com')
                 ->press('cadastrar')
                 ->assertSee(text: 'Todos');
        });
     }
}

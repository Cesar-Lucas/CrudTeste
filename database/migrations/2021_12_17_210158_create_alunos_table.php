<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
       

        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('contato');
            $table->string('email');
           /*  $table->softDeletes($column = 'deleted_at', $precision = 0); */
            $table->timestamps();
        });
       
        /*  Schema::table('alunos', function (Blueprint $table) {
            $table->softDeletes();
        });  */
       
    }

   
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

      
   

        Schema::dropIfExists('alunos');
        
        
       /*  Schema::table('alunos', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });  */
    }
       
}

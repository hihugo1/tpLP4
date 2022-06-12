<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('sobrenome',100);
            $table->string('endereco',100);
            $table->date('dataNascimento',80);
            $table->string('cpf',100);
            $table->string('telefone',100);
            $table->string('email',100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}

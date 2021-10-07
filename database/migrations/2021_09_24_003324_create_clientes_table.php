<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nomecompleto',100);
            $table->date('aniversario')->nullable();
            $table->string('cpf',14)->unique();
            $table->string('rg', 14)->nullable();
            $table->string('fone', 18)->nullable();
            $table->string('celular', 18)->nullable();
            $table->string('email', 140)->nullable();
            $table->string('endereco', 140)->nullable();
            $table->string('numero', 5)->nullable();
            $table->string('bairro', 120)->nullable();
            $table->string('cidade', 120)->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('CEP', 8)->nullable();
            $table->string('complemento', 30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}

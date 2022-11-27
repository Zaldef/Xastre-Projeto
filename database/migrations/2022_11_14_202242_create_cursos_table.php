<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('name', 100)->unique();
            $table->text("description");
            $table->string("simplified_description");
            $table->integer('alunosqtdmin');
            $table->integer('alunosqtdmax');
            $table->string('image');
            $table->char('professor', 50)->nullable(Não atribuído)->unique();

        });
    }

    schema::table('cursos', function(Blueprint $table){
        /*criando chave estrangeira*/
        $table->foreing('id_alunos')->references('id')->on('alunos')->onDelete('cascade');
        $table->foreing('id_professor')->references('id')->on('professors')->onDelete('cascade');
    });


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};

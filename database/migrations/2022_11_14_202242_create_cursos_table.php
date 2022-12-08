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
            $table->foreignId('user_id')->nullable(); 
            $table->string("status")->default('1');   
        });
    }

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

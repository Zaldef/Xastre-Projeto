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
        Schema::create('curso_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curso_id')->constrained() ->onDelete('cascade');
            $table->foreignId('user_id')->constrained() ->onDelete('cascade');
            $table->string("nota")->default('0');
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
        Schema::dropIfExists('curso_user');{
            $table->dropForeign('curso_user_curso_id_foreign');
            $table->dropForeign('curso_user_user_id_foreign');
        }
    }
};
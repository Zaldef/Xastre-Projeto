<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Curso; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Curso::factory()->create();
        Curso::factory()->curso2()->create();
        Curso::factory()->curso3()->create();

        \App\Models\User::factory()->create([
            'name' => "Secretaria",
            'email' => "secretaria@REX.edu.br",
            'password' => Hash::make("gui260604"),
            'acesso' => "secretaria",
        ]);
        User::factory()->aluno1()->create();
        User::factory()->aluno2()->create();
        User::factory()->aluno3()->create();
        User::factory()->aluno4()->create();
        User::factory()->aluno5()->create();
        User::factory()->professor1()->create();
        User::factory()->professor2()->create();
        User::factory()->professor3()->create();


    }
}
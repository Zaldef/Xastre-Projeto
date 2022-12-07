<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => "Word",
            'description'=> "Você aprende as principais funções do Word, o padrão ABNT, os tipos de tabelas, como criar sumários, trabalhar com impressoras, numerações, e muito mais! Sobre a carga horária: O curso possui 80 horas de carga horária.",
            'simplified_description' => "Curso sobre um dos itens do pacote Office, o WORD",
            'alunosqtdmin' => "10",
            'alunosqtdmax' => "40",
            'image' => "curso1"    
        ];
    }

    public function curso2()
    {
        return $this->state (function (array $attributes){               
            return [
                'name' => "PowerPoint",
                'description'=> "Ensina A arte de se comunicar, Como estruturar sua apresentação?, Como apresentar?, Apresentação Executiva, Apresentação Criativa, Apresentação comercial, Primeiros passos com o PowerPoint, Criando templates , Começando sua apresentação e Formulário!",
                'simplified_description' => "Curso sobre um dos itens do pacote Office, o PowerPoint",
                'alunosqtdmin' => "10",
                'alunosqtdmax' => "40",
                'image' => "curso2"                 
            ];
        });
    }

    public function curso3()
    {
        return $this->state (function (array $attributes){
            return [               
                'name' => "Excel",
                'description'=> "Você aprende a trabalhar com o Excel 2016. Você irá aprender funções e comandos mais básicos até funções mais avançadas, como por exemplo: procv, proch dentre outras. Você também aprenderá os recursos novos do Excel 2016 como a planilha de previsão de tendências de dados.",
                'simplified_description' => "Curso sobre um dos itens do pacote Office, o Excel",
                'alunosqtdmin' => "1",
                'alunosqtdmax' => "5",
                'image' => "curso3" 
            ];
        });
    }
}
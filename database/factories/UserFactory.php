<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => "Secretaria",
            'email' => "secretaria@REX.edu",
            'password' => Hash::make("gui260604"),
            'acesso' => "Secretaria",
        ];
    }

    public function aluno1()
    {
        return $this->state (function (array $attributes){
            return [
                'name'      => "Maiza Silva Santos",
                'email'     => "aluno1@example.com",
                'password'  => Hash::make("123456789"),
                'acesso'    => "Aluno",
                'cpf'       => "25678910348",
                'endereco'  => "124856369",
                'filme'     => "Matrix",
            ];
        });
    }

    public function aluno2()
    {
        return $this->state (function (array $attributes){
            return [
                'name'      => "Gabriel Silva Santos",
                'email'     => "aluno2@example.com",
                'password'  => Hash::make("123456789"),
                'acesso'    => "Aluno",
                'cpf'       => "16578942304",
                'endereco'  => "124856369",
                'filme'     => "O massacre da Serra Elétrica",
            ];
        });
    }

    public function aluno3()
    {
        return $this->state (function (array $attributes){
            return [
                'name'      => "Bruno Silva Santos",
                'email'     => "aluno3@example.com",
                'password'  => Hash::make("123456789"),
                'acesso'    => "Aluno",
                'cpf'       => "78564392105",
                'endereco'  => "13335350",
                'filme'     => "Pokemon, a volta de Mewtwo",
            ];
        });
    }

    public function aluno4()
    {
        return $this->state (function (array $attributes){
            return [
                'name'      => "Guilherme Silva Santos",
                'email'     => "aluno4@example.com",
                'password'  => Hash::make("123456789"),
                'acesso'    => "Aluno",
                'cpf'       => "44513691859",
                'endereco'  => "13335350",
                'filme'     => "Avatar",
            ];
        });
    }

    public function aluno5()
    {
        return $this->state (function (array $attributes){
            return [
                'name'      => "Maria Elisa Silva Santos",
                'email'     => "aluno5@example.com",
                'password'  => Hash::make("123456789"),
                'acesso'    => "Aluno",
                'cpf'       => "49562370124",
                'endereco'  => "15447896",
                'filme'     => "A Cabana",
            ];
        });
    }

    public function professor1()
    {
        return $this->state (function (array $attributes){
            return [
                'name'      => "Leandro Silva Santos",
                'email'     => "professor1@example.com",
                'password'  => Hash::make("123456789"),
                'acesso'    => "Professor",
                'cpf'       => "56278910348",
                'endereco'  => "142856369",
                'image'     => "avatar",
            ];
        });
    }

    public function professor2()
    {
        return $this->state (function (array $attributes){
            return [
                'name'      => "Yara Silva Santos",
                'email'     => "professor2@example.com",
                'password'  => Hash::make("123456789"),
                'acesso'    => "Professor",
                'cpf'       => "56178942304",
                'endereco'  => "12635369",
                'image'     => "avatar",
            ];
        });
    }

    public function professor3()
    {
        return $this->state (function (array $attributes){
            return [
                'name'      => "Ricardo Silva Santos",
                'email'     => "professor3@example.com",
                'password'  => Hash::make("123456789"),
                'acesso'    => "Professor",
                'cpf'       => "78564392105",
                'endereco'  => "13895350",
                'image'     => "avatar",
            ];
        });
    }
    

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

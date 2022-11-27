<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    public function Id_Alunos()
    {
        return $this->hasMany(Aluno::class, 'id_alunos');
    }
    public function Id_Professor()
    {
        return $this->hasOne(Professor::class, 'id_professor');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    public function Id_Cursos()
    {
        return $this->hasMany(Curso::class, 'id_cursos');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function turmas()
    {
        return $this->hasOne('App\AlunoTurma');
    }
}

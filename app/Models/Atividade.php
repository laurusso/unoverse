<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
   use HasFactory;
   public $incrementing = false;
   protected $dateFormat = '"Y-m-d H:i:s"';
   protected $fillable = ['num','nome','modulo','descricao','aluno','link_aula','curioso','codigo'];
}

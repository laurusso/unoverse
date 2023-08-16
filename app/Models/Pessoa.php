<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    public $incrementing = false;
    //protected $dateFormat = '"Y-m-d H:i:s"';
    protected $fillable = ['email','senha','foto','nome','sobrenome','genero','curioso','adm'];
}

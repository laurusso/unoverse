<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    
    public $incrementing = false;
    protected $fillable = ['id_aluno','email'];

}

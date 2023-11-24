<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    public $incrementing = false;
    protected $fillable = ['codigo_escola','nome_escola','UF', 'cidade','publica'];
}       
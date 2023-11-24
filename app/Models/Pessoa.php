<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Notifications\Notifiable;
//use Laravel\Sanctum\HasApiTokens;

class Pessoa  extends Authenticatable 
{
    //use HasApiTokens, HasFactory, Notifiable;
    //use HasFactory;
    public $incrementing = false;
    //protected $dateFormat = '"Y-m-d H:i:s"';
    protected $fillable = ['email','senha','foto','nome','sobrenome','genero','curioso','adm','ativo'];
}

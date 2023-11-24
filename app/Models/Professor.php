<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    
    public $incrementing = false;
    protected $fillable = ['id_prof','email','id_escola'];

}
 
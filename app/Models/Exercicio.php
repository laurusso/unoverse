<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    public $incrementing = false;
    
   protected $fillable = ['fk_atividade','fk_alt_correta','pergunta','imagematv','alt_1','alt_2','alt_3'];


}
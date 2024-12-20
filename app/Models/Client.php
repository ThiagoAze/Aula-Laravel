<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    //Somente inseri com os dados especificados
    protected $fillable = ['nome', 'endereco', 'observacao', 'avatar']; 
}

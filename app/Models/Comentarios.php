<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{

    protected $fillable = ['nome','mensagem'];

    protected $dates = ['deleted_at'];

    use HasFactory;
}

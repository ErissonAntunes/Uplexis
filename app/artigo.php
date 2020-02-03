<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artigo extends Model
{
    protected $fillable = [
    	'id',
    	'id_usuario',
    	'titulo',
    	'link'
    ];
}

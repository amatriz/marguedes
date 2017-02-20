<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
 protected $fillable = ['produtoservice','titulo', 'detalhes', 'categoria','valormedio','horaatendimento','user_id'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
   protected $fillable = ['produtoservice','titulo', 'descritivo', 'categoria'];
   public function user(){
       return $this->belongsToMany(User::class);
   }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class importaexcel extends Model
{
   public $fillable = ['produto','marca', 'modelo', 'quantidade' , 'obs'];
}

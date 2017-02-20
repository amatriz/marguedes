<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderpj extends Model
{
        protected $fillable = ['seguimento',
        'produto', 'marca', 'modelo', 'quantidade','obs','user_id'
    ];
}

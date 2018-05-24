<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'age', 'weight'
    ];

//    protected $primaryKey = 'user_id';

}

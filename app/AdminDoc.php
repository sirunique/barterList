<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminDoc extends Model
{
    protected $fillable = [
        'title', 'description'
    ];
}

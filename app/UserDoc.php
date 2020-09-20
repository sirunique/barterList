<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDoc extends Model
{
    protected $fillable = [
        'title', 'description'
    ];
}

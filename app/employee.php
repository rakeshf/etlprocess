<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class employee extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'employee';

    protected $fillable = [
        'first_name', 'last_name','department'
    ];
}

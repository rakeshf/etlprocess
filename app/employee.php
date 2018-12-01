<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Employee extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'employee';

    protected $fillable = [
        'first_name', 'last_name','department'
    ];
}

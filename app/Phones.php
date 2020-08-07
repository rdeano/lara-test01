<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    protected $table = 'phones';
    public $timestamps = false;
    protected $fillable = ['phonenumber','isActive'];
}

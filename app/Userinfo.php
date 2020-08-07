<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    protected $table = 'userinfo';
    protected $primaryKey = 'sysid';
    public $timestamps = false;
    protected $fillable = ['username','password','name','isActive'];
}

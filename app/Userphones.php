<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userphones extends Model
{
    protected $table = 'userphones';
    protected $primaryKey = 'sysid';
    public $timestamps = false;
    protected $fillable = ['userid','phoneid','isActive'];

}

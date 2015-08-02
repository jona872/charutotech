<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id';
    //protected $fillable = ['id','name', 'username', 'type' ,'password'];
    //protected $hidden = ['password', 'remember_token'];
    public $timestamps = false;
    protected $dateFormat = 'U';
}

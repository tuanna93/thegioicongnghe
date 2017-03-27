<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['name','slug','image','intro','content','post_id','keywords','description','status'];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{

    protected $fillable = ['name','slug','icon','parent_id','keywords','description'];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name','slug','price_new','price_old','intro','content','image','keywords','description','status_sale','status'];

}

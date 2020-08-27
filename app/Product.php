<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public $timestamps = true;
    protected $fillable = ['id', 'product_name', 'product_image', 'product_price', 'product_discount', 'product_description'];
}

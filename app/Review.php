<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
     protected $table = 'review';
    protected $primaryKey='review_id';
    public $timestamps = false;

    protected $fillable=['review_id','rating','customer_customer_id','product_product_id','note','image','title'];
}

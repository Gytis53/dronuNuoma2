<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_status extends Model
{
    protected $table = 'order_status';
    protected $primaryKey='order_status_id';
    public $timestamps = false;


    protected $fillable=['order_status_id','name','description','last_update'];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_has_tax extends Model
{
    protected $table = 'order_has_tax';


    protected $fillable=['order_order_id','tax_tax_id'];
}
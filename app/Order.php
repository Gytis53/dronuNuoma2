<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey='order_id';
    public $timestamps = false;


    protected $fillable=['order_id','reference','billing_name','delivery_name','customer_customer_id','card_number','expiry_date',"cvv","note","delivery_date","order_date","confirmation_number","courier_courier_id","order_status_order_status_id"];
}

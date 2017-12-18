<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $table = 'tax';
    protected $primaryKey='tax_id';
    public $timestamps = false;

    protected $fillable=['tax_id','name','description','price'];
}

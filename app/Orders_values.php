<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_values extends Model
{
    //
    protected $fillable=['items_id','orders_id','value'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    function userOrders()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}

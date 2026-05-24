<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function cart_items(){
        return $this->belongsTo(Carts_items::class, 'cart_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function order_items(){
        return $this->hasMany(Order_items::class);
    }

    public function payments(){
        return $this->hasOne(Payments::class);
    }
}

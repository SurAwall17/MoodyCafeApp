<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function cart_items(){
        return $this->belongsTo(carts_items::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function order_items(){
        return $this->hasMany(order_items::class);
    }

    public function payments(){
        return $this->hasOne(payments::class);
    }
}

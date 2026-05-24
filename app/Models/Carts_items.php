<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carts_items extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function products(){
        return $this->belongsTo(Products::class, 'product_id');
    }

    public function cart_items(){
        return $this->belongsTo(Carts::class, 'carts_id');
    }

    public function orders(){
        return $this->hasMany(Orders::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carts_items extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function products(){
        return $this->belongsTo(products::class);
    }

    public function cart_items(){
        return $this->belongsTo(carts::class);
    }

    public function orders(){
        return $this->hasMany(orders::class);
    }
}

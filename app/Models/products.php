<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function categories(){
        return $this->belongsTo(categories::class);
    }

    public function cart_items(){
        return $this->hasMany(carts_items::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function categories(){
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function cart_items(){
        return $this->hasMany(Carts_items::class);
    }
}

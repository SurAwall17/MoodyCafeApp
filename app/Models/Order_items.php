<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_items extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function orders(){
        return $this->belongsTo(Orders::class, 'order_id');
    }
}

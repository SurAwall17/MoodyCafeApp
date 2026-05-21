<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_items extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function orders(){
        return $this->belongsTo(orders::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    use HasFactory;
    protected $gurded=[];

    public function order(){
        return $this->belongsTo(order::class);
    }

    public function product(){
        return $this->belongsTo(product::class);
    }
}

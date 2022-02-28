<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class product extends Model
{
    use HasFactory;
    protected $gurded = [];
   //booted method diye ekhane product er title k slug kore dissi,database e title ta slug hoye slug field e store hobe 

   protected static function booted()
   {
       static::created(function($product){
           $product->slug=Str::slug($product->title);
       });
   }
    public function category(){
        return $this->hasOne(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $gurded = [];

    public function parent_category(){
        return $this->belongsTo(category::class);
    }
    public function child_category(){
        return $this->hasMany(Category::class);
    }
    public function products(){
        return $this->hasMany(product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public function category(){
        return $this->belongsTo(    Category::class, "categoryId");
        
    }
    public function ings(){
        return $this->hasMany(Ingredient::class, "dishid");
    }
    public function dishjoin(){
        return $this->hasMany(alg_dish::class, "dishid");
    }
    public $table= 'dishes';
    protected $fillable=["categoryId", "name","desc","prep","cooktime"];
}

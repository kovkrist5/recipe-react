<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function dishes(){
        return $this->hasMany(Dish::class);
    }
    public $timestamps= false;
    public $table= 'categories';
    protected $fillable=['id', "categoryName"];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //protected $table = 'questions as qes';
    public function answer()
    {
        return $this->hasMany(Answer::class);
    }
    public function category()
    {
        return $this->hasMany(Category::class);
    }
}

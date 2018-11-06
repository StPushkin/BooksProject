<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function books(){
        return $this->hasMany('App\Models\Book');
    }

    public function countBooksByCategory(){
        return $this->books()
        ->selectRaw('category_id, count(*) as booksCount')
        ->groupBy('category_id');
    }
}
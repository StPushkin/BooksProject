<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','description'];

    public function authors(){
        return $this->belongsToMany('App\Models\Author');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table       = "articles";
    protected $primary_key = "id";
    protected $fillable = [
        'name', 
        'user_id', 
        'category_id', 
        'description', 
        'title',
        'description', 
        'image'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
		'name','slug','body'
	];


    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}


//esto se lee asi una categoria tiene muchos posts

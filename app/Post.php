<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'user_id', 'category_id', 'name','slug', 'excerpt', 'body', 'youtube', 'file', 'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function category() 
	{
		return $this->belongsTo(Category::class);
	}

    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }

    //un post pertenece y tiene a muchas etiquetas
}

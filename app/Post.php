<?php

namespace App;

class Post extends Model
{
    // protected $fillable =[ 'title','body'];
    // protected $guarded=[];
	public function comments()
	{
		return $this->hasMany(Comment::class);

	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

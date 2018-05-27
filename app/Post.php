<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['name'];

	public static function boot()
	{
		static::created(function($var){
//		

		});
	}
}

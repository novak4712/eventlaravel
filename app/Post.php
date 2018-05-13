<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['name'];

	public static function boot()
	{
		static::created(function($var){
//			dd($var);

			$exists = Storage::exists('/public/pages/'. $var->name . '.php');

			Storage::put('/public/pages/'. $var->name . '.php', 'Some content');

		});
	}
}

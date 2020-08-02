<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	use \Conner\Tagging\Taggable;

	protected $table = 'blog';
	protected $guarded = [];
	protected $fillable = ['title', 'thumbnail', 'content', 'tags', 'slug', 'activated'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
	protected $table = 'sidebar';
	protected $fillable = ['title', 'link', 'category_sidebar_id'];

	public function categorySidebar()
	{
		return $this->belongsTo('App\Models\CategorySidebar', 'category_sidebar_id');
	}
}

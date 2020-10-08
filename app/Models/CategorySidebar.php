<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategorySidebar extends Model
{
	protected $table = 'category_sidebar';
	protected $fillable = ['category_sidebar_name'];

	public function sidebar()
	{
		return $this->hasMany('App\Models\Sidebar', 'category_sidebar_id');
	}
}

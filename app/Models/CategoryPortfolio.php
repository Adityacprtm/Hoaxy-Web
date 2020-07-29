<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryPortfolio extends Model
{
	protected $table = 'category_portfolio';
	protected $fillable = ['category_name'];

	public function portfolio()
	{
		return $this->hasOne('App\Models\Portfolio');
	}
}

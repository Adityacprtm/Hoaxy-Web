<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
	protected $tagle = 'portfolio';
	protected $fillable = ['title', 'link', 'media', 'category_id'];

	public function category_portfolio()
	{
		return $this->belongsTo('App\Models\CategoryPortfolio');
	}
}

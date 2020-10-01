<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
	protected $table = 'portfolio';
	protected $fillable = ['title', 'link', 'text_link', 'desc_header', 'desc_body', 'media', 'category_id'];

	public function categoryPortfolio()
	{
		return $this->belongsTo('App\Models\CategoryPortfolio', 'category_id');
	}
}

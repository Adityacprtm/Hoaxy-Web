<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
	protected $table = 'education';

	protected $fillable = ['level', 'sort', 'institution', 'year', 'description', 'country', 'city'];
}

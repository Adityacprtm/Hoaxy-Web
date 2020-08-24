<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NonformalEducation extends Model
{
	protected $table = 'nonformal_education';

	protected $fillable = ['institution', 'year', 'hours', 'description', 'location'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
	protected $table = 'experience';

	protected $fillable = ['company', 'position', 'description', 'startDate', 'endDate'];
}

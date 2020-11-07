<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
	protected $table = 'journey';
	protected $fillable = ['date', 'description'];
}

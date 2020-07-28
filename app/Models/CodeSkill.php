<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodeSkill extends Model
{
	protected $table = 'code_skill';

	protected $fillable = ['title', 'level', 'activated'];
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonformalEducationTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nonformal_education', function (Blueprint $table) {
			$table->id();
			$table->string('institution', 100);
			$table->string('year', 25);
			$table->string('hours', 100)->nullable();
			$table->string('description')->nullable();
			$table->string('location', 100);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('nonformal_education');
	}
}

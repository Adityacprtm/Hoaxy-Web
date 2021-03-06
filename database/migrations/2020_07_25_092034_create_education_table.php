<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('education', function (Blueprint $table) {
			$table->id();
			$table->string('level', 50);
			$table->tinyInteger('sort');
			$table->string('institution', 100);
			$table->string('year', 25);
			$table->string('description')->nullable();
			$table->string('country', 25);
			$table->string('city', 25);
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
		Schema::dropIfExists('education');
	}
}

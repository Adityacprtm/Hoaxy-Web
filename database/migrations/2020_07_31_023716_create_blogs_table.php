<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->string('thumbnail');
			$table->text('content')->nullable();
			$table->string('tags')->nullable();
			$table->string('slug');
			$table->boolean('activated');
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
		Schema::dropIfExists('blog');
	}
}

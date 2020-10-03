<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portfolio', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->foreignId('category_id')->references('id')->on('category_portfolio');
			$table->string('link');
			$table->string('text_link');
			$table->string('link_other');
			$table->string('text_link_other');
			$table->string('desc_header');
			$table->string('desc_body');
			$table->string('media');
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
		Schema::dropIfExists('portfolio');
	}
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title', 255);
            $table->string('code', 50);
            $table->string('guide', 255)->nullable();
			$table->integer('user_create', false)->unsigned();
			$table->integer('user_update', false)->unsigned();
			$table->integer('level', false)->nullable();
			$table->integer('parent_section', false)->nullable();
			$table->integer('sort', false)->default(500);
			$table->integer('picture', false)->nullable();
			$table->integer('left_margin', false)->unsigned();
			$table->integer('right_margin', false)->unsigned();
			$table->text('description')->nullable();

	        $table->unique('code');
	        $table->index('level', 'ix_section_page_level');
	        $table->index('parent_section', 'ix_section_page_parent_section');
	        $table->index(array('left_margin', 'right_margin'), 'ix_section_page_margin');
	        $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_sections');
    }
}

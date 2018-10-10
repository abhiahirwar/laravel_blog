<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('image_id')->unsigned()->nullable();
            $table->integer('position')->unsigned()->default(0);
            $table->integer('parent_id')->unsigned()->nullable()->default(null);
            $table->boolean('private')->default(0);
            $table->boolean('is_home')->default(0);
            $table->boolean('redirect')->default(0);
            $table->text('title');
            $table->text('slug');
            $table->text('uri');
            $table->text('body');
            $table->text('status');
            $table->text('meta_keywords');
            $table->text('meta_description');
            $table->text('css')->nullable();
            $table->text('js')->nullable();
            $table->string('module')->nullable();
            $table->string('template')->nullable();
            $table->string('meta_robots_no_index')->default(0);
            $table->string('meta_robots_no_follow')->default(0);
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}

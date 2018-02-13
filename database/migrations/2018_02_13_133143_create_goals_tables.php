<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 1024);
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('projects_goals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->integer('goal_id');
            $table->boolean('is_primary');
            $table->integer('order');
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
        Schema::dropIfExists('projects_goals');
        Schema::dropIfExists('goals');
    }
}

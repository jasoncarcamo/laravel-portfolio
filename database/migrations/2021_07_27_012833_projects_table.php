<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->string("description");
            $table->string("images");
            $table->string("live_url");
            $table->string("repo_url");
            $table->timestamp("date_started")->nullable();
            $table->timestamp("date_finished")->nullable();
            $table->timestamp("last_updated")->nullable();
            $table->timestamp("date_created")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}

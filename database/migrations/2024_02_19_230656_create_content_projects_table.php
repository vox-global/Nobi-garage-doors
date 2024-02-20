<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_projects', function (Blueprint $table) {
            $table->id();
            $table->string('banner_heading')->nullable();
            $table->text('banner_text')->nullable();
            $table->string('banner_button_text')->nullable();
            $table->string('banner_image')->nullable();
            
            $table->string('inner_page_button_text')->nullable();
            $table->string('inner_page_heading')->nullable();

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
        Schema::dropIfExists('content_projects');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateContentHomepageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_homepage', function (Blueprint $table) {
            $table->id();
            $table->string('banner_heading')->nullable();
            $table->text('banner_text')->nullable();
            $table->string('banner_button_text')->nullable();
            $table->string('banner_image')->nullable();

            $table->string('first_section_first_heading')->nullable();
            $table->string('first_section_first_description')->nullable();
            $table->string('first_section_second_heading')->nullable();
            $table->string('first_section_second_description')->nullable();
            $table->string('first_section_third_heading')->nullable();
            $table->string('first_section_third_description')->nullable();
            $table->string('first_section_fourth_heading')->nullable();
            $table->string('first_section_fourth_description')->nullable();

            $table->string('second_section_heading')->nullable();
            $table->text('second_section_description')->nullable();

            $table->string('third_section_heading')->nullable();

            $table->string('fourth_section_heading')->nullable();
            $table->text('fourth_section_description')->nullable();
            $table->string('fourth_section_image')->nullable();

            $table->string('fifth_section_heading')->nullable();
            $table->text('fifth_section_description')->nullable();
            $table->string('fifth_section_image')->nullable();

            $table->string('sixth_section_heading')->nullable();
            $table->text('sixth_section_description')->nullable();
            $table->string('sixth_section_image')->nullable();

            $table->string('seventh_section_heading')->nullable();

            $table->string('eighth_section_heading')->nullable();
            $table->string('eighth_section_first_heading')->nullable();
            $table->string('eighth_section_first_description')->nullable();
            $table->string('eighth_section_second_heading')->nullable();
            $table->string('eighth_section_second_description')->nullable();
            $table->string('eighth_section_third_heading')->nullable();
            $table->string('eighth_section_third_description')->nullable();
            $table->string('eighth_section_fourth_heading')->nullable();
            $table->string('eighth_section_fourth_description')->nullable();
            
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
        Schema::dropIfExists('content_homepage');
    }
}

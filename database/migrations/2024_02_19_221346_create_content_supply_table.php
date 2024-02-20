<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentSupplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_supply', function (Blueprint $table) {
            $table->id();
            
            $table->string('banner_heading')->nullable();
            $table->text('banner_text')->nullable();
            $table->string('banner_button_text')->nullable();
            $table->string('banner_image')->nullable();

            $table->string('first_section_heading')->nullable();
            $table->text('first_section_description')->nullable();

            $table->string('second_section_first_heading')->nullable();
            $table->text('second_section_first_description')->nullable();
            $table->string('second_section_first_image')->nullable();

            $table->string('second_section_second_heading')->nullable();
            $table->text('second_section_second_description')->nullable();
            $table->string('second_section_second_image')->nullable();

            $table->string('second_section_third_heading')->nullable();
            $table->text('second_section_third_description')->nullable();
            $table->string('second_section_third_image')->nullable();
            
            $table->string('third_section_heading')->nullable();
            
            $table->string('fourth_section_heading')->nullable();
            $table->text('fourth_section_description')->nullable();

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
        Schema::dropIfExists('content_supply');
    }
}

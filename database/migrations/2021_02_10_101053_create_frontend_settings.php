<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontendSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend_settings', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title')->nullable();
            $table->string('meta_name')->unique();
            $table->string('meta_value')->nullable();
            $table->enum('meta_type', ['Text', 'Textarea', 'Select', 'Richeditor', 'Number', 'Checkbox', 'Gallery', 'Media'])->nullable();   
            $table->enum('meta_group', ['General', 'Homepage', 'Header Section', 'Footer Section'])->nullable();   
            $table->integer('meta_order')->nullable();
            $table->string('meta_placeholder')->nullable();
            $table->string('meta_description')->nullable();
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
        Schema::dropIfExists('frontend_settings');
    }
}

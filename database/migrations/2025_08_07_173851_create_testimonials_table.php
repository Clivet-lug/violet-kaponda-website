<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_title')->nullable();
            $table->string('client_company');
            $table->string('client_photo')->nullable();
            $table->text('testimonial_text');
            $table->string('service_type')->nullable(); // 'Speaking', 'Consulting', etc.
            $table->integer('rating')->default(5); // 1-5 stars
            $table->boolean('is_featured')->default(false);
            $table->boolean('show_on_homepage')->default(false);
            $table->date('testimonial_date')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->timestamps();
            
            $table->index(['is_featured', 'show_on_homepage']);
            $table->index('service_type');
        });
    }

    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
};
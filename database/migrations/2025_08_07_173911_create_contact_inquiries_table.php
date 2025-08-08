<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('media_gallery', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file_path');
            $table->string('file_type'); // 'image', 'video'
            $table->string('category'); // 'Speaking Events', 'Professional Photos', 'Behind the Scenes'
            $table->text('caption')->nullable();
            $table->text('alt_text')->nullable(); // For SEO
            $table->string('event_name')->nullable(); // Name of speaking event
            $table->date('event_date')->nullable();
            $table->string('location')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('show_in_hero')->default(false);
            $table->integer('order_position')->default(0);
            $table->json('metadata')->nullable(); // Additional data like camera settings, etc.
            $table->timestamps();
            
            $table->index(['category', 'is_featured']);
            $table->index(['show_in_hero', 'order_position']);
            $table->index('event_date');
        });
    }

    public function down()
    {
        Schema::dropIfExists('media_gallery');
    }
};
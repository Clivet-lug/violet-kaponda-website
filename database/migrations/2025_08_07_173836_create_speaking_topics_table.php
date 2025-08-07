<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('speaking_topics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('key_points')->nullable(); // JSON array of key points
            $table->string('category'); // 'Fintech', 'Leadership', 'Wellness', etc.
            $table->string('duration')->nullable(); // '45 minutes', '1 hour', etc.
            $table->string('audience_type')->nullable(); // 'Corporate', 'University', etc.
            $table->boolean('is_featured')->default(false);
            $table->integer('order_position')->default(0);
            $table->string('image')->nullable(); // Topic image
            $table->timestamps();
            
            $table->index(['is_featured', 'order_position']);
            $table->index('category');
            $table->index('slug');
        });
    }

    public function down()
    {
        Schema::dropIfExists('speaking_topics');
    }
};
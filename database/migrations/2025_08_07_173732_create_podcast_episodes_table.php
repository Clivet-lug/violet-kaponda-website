<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('podcast_episodes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('episode_number');
            $table->string('youtube_url')->nullable();
            $table->string('tiktok_url')->nullable();
            $table->string('spotify_url')->nullable();
            $table->string('thumbnail')->nullable();
            $table->integer('duration_minutes')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamp('published_at');
            $table->timestamps();
            
            $table->index(['is_featured', 'published_at']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('podcast_episodes');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('newsletter_subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->enum('status', ['active', 'unsubscribed', 'bounced'])->default('active');
            $table->json('interests')->nullable(); // Array of topics they're interested in
            $table->string('source')->nullable(); // Where they subscribed from
            $table->timestamp('subscribed_at');
            $table->timestamp('unsubscribed_at')->nullable();
            $table->string('unsubscribe_token')->unique()->nullable();
            $table->timestamps();
            
            $table->index(['status', 'subscribed_at']);
            $table->index('email');
        });
    }

    public function down()
    {
        Schema::dropIfExists('newsletter_subscribers');
    }
};
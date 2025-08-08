<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('logo_path');
            $table->string('website_url')->nullable();
            $table->enum('partnership_type', [
                'client',
                'speaking_venue', 
                'media_partner',
                'sponsor',
                'collaboration',
                'employer',
                'other'
            ]);
            $table->boolean('is_featured')->default(false);
            $table->boolean('show_on_homepage')->default(false);
            $table->integer('order_position')->default(0);
            $table->date('partnership_start')->nullable();
            $table->date('partnership_end')->nullable();
            $table->timestamps();
            
            $table->index(['is_featured', 'order_position']);
            $table->index(['show_on_homepage', 'order_position']);
            $table->index('partnership_type');
        });
    }

    public function down()
    {
        Schema::dropIfExists('partners');
    }
};
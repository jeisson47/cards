<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('companies_id');
            $table->foreign('companies_id')->references('id')->on('companies')->onDelete('cascade');
            $table->string('style');
            $table->string('status');
            $table->string('background_color')->nullable();
            $table->string('front')->nullable();
            $table->string('name_person');
            $table->string('type_person')->nullable();
            $table->string('more_information')->nullable();
            $table->string('brand_logo')->nullable();
            $table->string('location_map')->nullable();
            $table->string('calendar')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('tiktok_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('whatsApp_link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};

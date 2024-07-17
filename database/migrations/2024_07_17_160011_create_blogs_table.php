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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('photo');
            $table->string('thumb');
            $table->longText('detail');
            $table->bigInteger('blog_category_id')->unsigned();
            $table->foreign('blog_category_id')->on('blog_categories')->references('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->on('users')->references('id');
            $table->string('slug', 255)->unique();
            $table->string('tags')->nullable();
            $table->string('lang')->default('en');
            $table->integer('visit')->default(0);
            $table->string('content_lang')->default('en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

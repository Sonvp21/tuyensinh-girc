<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Schema::create('post_categories', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedInteger('user_id')->index();
        //     $table->string('title');
        //     $table->string('slug');
        //     $table->timestamps();
        // });
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            // $table->unsignedInteger('category_id')->index();
            $table->string('title');
            $table->string('slug')->index();
            $table->longText('content');
            $table->dateTime('published_at');
            $table->boolean('is_visible')->default(true);
            $table->unsignedBigInteger('views')->default(0);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('categories');
        Schema::dropIfExists('posts');
    }
};

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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('category')->default('Uncategorized');
            $table->string("title");
            $table->string("description");
            $table->string("author");
            $table->date("date");
            $table->longText("body");
            // $table->string("video");
            $table->string("image");
            $table->integer("time");
            $table->integer("like");
            $table->timestamp("last_viewed");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

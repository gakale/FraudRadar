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
        Schema::create('frauds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->foreignId('category_id')->on('categories')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->on('users')->constrained()->onDelete('cascade');
            $table->string('status')->default('pending');
            $table->string('image');
            $table->string('video')->nullable();
            $table->string('url')->nullable();
            $table->integer('like')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frauds');
    }
};

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
        Schema::table('frauds', function (Blueprint $table) {
            $table->renameColumn('like', 'likes')->nullable()->change();
            $table->integer('dislikes')->default(0);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('frauds', function (Blueprint $table) {
            $table->renameColumn('likes', 'like')->nullable()->change();
            $table->dropColumn('dislikes');
        });
    }
};

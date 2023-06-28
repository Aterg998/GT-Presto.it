<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->after('image');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('user_id')->after('category_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->dropColumn('category_id');
            $table->dropForeign(['category_id']);
            $table->dropColumn('user_id');
            $table->dropForeign(['user_id']);
        });
    }
};

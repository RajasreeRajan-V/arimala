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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');
            $table->string('image');

            $table->string('subtagline1_title')->nullable();
            $table->text('subtagline1_description')->nullable();

            $table->string('subtagline2_title')->nullable();
            $table->text('subtagline2_description')->nullable();

            $table->string('subtagline3_title')->nullable();
            $table->text('subtagline3_description')->nullable();

            $table->string('subtagline4_title')->nullable();
            $table->text('subtagline4_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};

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
        Schema::create('career_aapplications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->constrained('careers')->onDelete('cascade');

            $table->string('name');
            $table->string('email');
            $table->string('phone');

            $table->string('position');
            $table->string('qualification');
            $table->string('experience');
            $table->string('resume');

            $table->text('cover_letter')->nullable();

            $table->unique(['career_id','email']);
            $table->unique(['career_id','phone']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_aapplications');
    }
};

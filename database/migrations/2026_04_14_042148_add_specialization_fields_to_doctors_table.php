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
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('specialization');
            $table->boolean('is_specialized')->default(false)->after('department_id');
            $table->string('sub_specialization')->nullable()->after('is_specialized');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::table('doctors', function (Blueprint $table) {
            $table->string('specialization')->after('qualification');
            $table->dropColumn(['is_specialized', 'sub_specialization']);
        });
    }
};

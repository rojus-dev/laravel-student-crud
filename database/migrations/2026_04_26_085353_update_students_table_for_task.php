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
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('birthday', 'gim_data');
            $table->foreignId('grupe_id')->nullable()->constrained('grupes');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('gim_data', 'birthday');
            $table->dropForeign(['grupe_id']);
            $table->dropColumn('grupe_id');
            $table->dropSoftDeletes();
        });
    }
};

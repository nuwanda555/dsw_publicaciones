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
        Schema::table('publicaciones', function (Blueprint $table) {
            //añadir columna deleted_at
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('publicaciones', function (Blueprint $table) {
            //borrar columna deleted_at
            $table->dropSoftDeletes();
        });
    }
};

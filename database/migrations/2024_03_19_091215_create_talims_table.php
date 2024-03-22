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
        Schema::create('talims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('talim_id')->constrained('talim_types','id');
            $table->string('tm_nomi',30);
            $table->string('tm_manzili',80);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('talims');
    }
};

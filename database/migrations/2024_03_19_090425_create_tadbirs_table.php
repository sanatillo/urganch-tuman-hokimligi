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
        Schema::create('tadbirs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('tadbir_types','id');
            $table->string('title');
            $table->string('content');
            $table->foreignId('image_id')->constrained('images_url','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tadbirs');
    }
};

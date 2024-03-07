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
        Schema::create('Apparats', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('job');
            $table->string('telnumber');
            $table->string('responsibility');   
            $table->string('email');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Apparats');
    }
};

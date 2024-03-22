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
        Schema::create('murojaats', function (Blueprint $table) {
            $table->integer('hammasi');
            $table->integer('jarayonda');
            $table->integer('qanoatlantirildi');
            $table->integer('rad_etildi');
            $table->integer('tushuntirildi');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murojaats');
    }
};

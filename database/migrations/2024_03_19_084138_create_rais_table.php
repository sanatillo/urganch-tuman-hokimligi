<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('rais', function (Blueprint $table) {
            $table->id();
            $table->string('MFY_nomi');
            $table->string('MFY_raisi');
            $table->string('tel_nomer', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rais');
    }
};

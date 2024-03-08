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
        Schema::create('Qabuljs', function (Blueprint $table) {
            $table->id();
            $table->integer('nomer');
            $table->string('sana_vaqti');
            $table->string('qabul_mahalla_nomi',50);
            $table->string('qabul_joyi_nomi', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Qabuljs');
    }
};

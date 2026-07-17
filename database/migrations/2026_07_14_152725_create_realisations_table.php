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
        Schema::create('realisations', function (Blueprint $table) {
            $table->id();
<<<<<<<< HEAD:database/migrations/2026_07_16_094408_create_realisations_table.php
            $table->string('title');
========
             $table->string('title');
>>>>>>>> origin/main:database/migrations/2026_07_14_152725_create_realisations_table.php
            $table->text('description');
            $table->string('media_url')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realisations');
    }
};

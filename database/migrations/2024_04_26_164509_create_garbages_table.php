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
        Schema::create('garbages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(true);
            $table->string('image')->nullable(false);
            $table->string('size')->nullable(false);
            $table->string('description')->nullable(false);
            $table->integer('point')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garbages');
    }
};

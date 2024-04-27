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
            $table->string('name')->nullable(false);
            $table->string('image')->nullable(false);
            $table->string('size')->nullable(false);
            $table->string('description')->nullable(false);
            $table->integer('point')->nullable(false);
            $table->timestamps();
            $table->string('name');
            $table->integer('size');
            $table->text('description');
            $table->integer('point');
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

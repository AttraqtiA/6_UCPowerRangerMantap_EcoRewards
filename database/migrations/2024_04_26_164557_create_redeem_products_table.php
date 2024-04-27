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
        Schema::create('redeem_products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullabale(false);
            $table->string('image')->nullable(false);
            $table->string('description')->nullable(true);
            $table->integer('price_point')->nullable(false);
            $table->integer('stock')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redeem_products');
    }
};
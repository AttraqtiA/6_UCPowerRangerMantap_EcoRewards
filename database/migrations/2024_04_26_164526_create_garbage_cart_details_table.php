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
        Schema::create('garbage_cart_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('garbageCart_id')->index();
            $table->foreign('garbageCart_id')->references('id')->on('garbage_carts')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('garbage_id')->index();
            $table->foreign('garbage_id')->references('id')->on('garbages')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garbage_cart_details');
    }
};

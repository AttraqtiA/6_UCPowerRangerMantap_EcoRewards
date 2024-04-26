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
        Schema::create('garbage_transaction_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('garbage_transaction_id')->index();
            $table->foreign('garbage_transaction_id')->references('id')->on('garbage_transactions')->onDelete('cascade');
            $table->unsignedBigInteger('garbage_id')->index();
            $table->foreign('garbage_id')->references('id')->on('garbages')->onDelete('cascade');
            $table->integer('quantity');
            $table->integer('point');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garbage_transaction_details');
    }
};

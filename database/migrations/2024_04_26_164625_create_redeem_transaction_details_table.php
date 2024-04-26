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
        Schema::create('redeem_transaction_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('redeemProduct_id')->index();
            $table->foreign('redeemProduct_id')->references('id')->on('redeem_products')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('redeemTransaction_id')->index();
            $table->foreign('redeemTransaction_id')->references('id')->on('redeem_transactions')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity')->nullable(false);
            $table->integer('point')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redeem_transaction_details');
    }
};

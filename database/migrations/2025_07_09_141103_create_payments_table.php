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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('id_game')->comment('ID of the game');
            $table->string('server')->comment('Server name or ID');
            $table->decimal('harga', 10, 2)->comment('Price of the payment');
            $table->integer('total_diamond')->comment('Total number of diamonds purchased');
            $table->string('diskon')->nullable()->comment('Discount applied, if any');
            $table->string('snap_token')->nullable()->comment('Token for payment processing');
            $table->string('status')->default('pending')->comment('Payment status (e.g., pending, completed, failed)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

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
        Schema::create('food_cart_items', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->integer('food_cart_id');
            $table->integer('category_id');
            $table->integer('service_id');
            $table->decimal('price_per_piece', 8, 2);
            $table->integer('quantity')->default(1);
            $table->decimal('total_price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_cart_items');
    }
};

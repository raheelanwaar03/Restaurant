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
        Schema::create('cart_food', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('product_id');
            $table->string('title');
            $table->string('price');
            $table->string('image');
            $table->string('qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_food');
    }
};

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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->float('qty',8,2);
            $table->timestamp('ordered_date');
            $table->float('order_amount',8,2);
            $table->string('tracking_number')->nullable();
            $table->boolean('shipped')->default(false);
            $table->timestamp('shipped_date')->nullable();
            $table->boolean('delivered')->default(false);
            $table->timestamp('delivered_date')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

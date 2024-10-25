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
        Schema::create('discount_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // Unique discount code
            $table->decimal('discount_amount', 8, 2)->nullable(); // Fixed discount
            $table->integer('discount_percentage')->nullable(); // Percentage discount
            $table->timestamp('start_date')->nullable(); // When the discount starts
            $table->timestamp('end_date')->nullable(); // When the discount ends
            $table->integer('max_uses')->default(1); // Maximum number of uses
            $table->integer('used_count')->default(0); // Number of times it has been used
            $table->decimal('minimum_order_amount', 8, 2)->nullable(); // Minimum order total for discount to apply
            $table->boolean('is_active')->default(true); // If the discount is currently active
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_codes');
    }
};

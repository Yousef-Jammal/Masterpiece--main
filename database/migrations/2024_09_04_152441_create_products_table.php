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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('title');
            $table->foreignId('category_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
            // $table->integer('price');
            $table->decimal('price', 7, 2);
            $table->enum('status', ['Publish', 'Scheduled', 'Inactive']);
            $table->string('color');
            $table->string('size');
            $table->string('gender');
            $table->integer('quantity');  // Add quantity column
            $table->text('description');
            $table->foreignId('store_id')
                    ->constrained('stores')
                    ->onUpdate('cascade')
                    ->onDelete('cascade')
                    ->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

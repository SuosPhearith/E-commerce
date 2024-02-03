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
            $table->string('name')->nullable(false);
            $table->float('price')->nullable(false);
            $table->text('description')->nullable(true);
            $table->text('product_detail')->nullable(false);
            $table->string('sku')->nullable(true);
            $table->unsignedBigInteger('category_id')->nullable(false);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('discount')->nullable();
            $table->string('tags');
            $table->string('status');
            $table->text('additional_information');
            $table->text('image')->nullable(false);
            $table->float('average_review')->nullable(true);
            $table->unsignedBigInteger('modified_by')->nullable();
            $table->foreign('modified_by')->references('id')->on('users')->onDelete('set null');
            $table->integer('quantity')->default(0);
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

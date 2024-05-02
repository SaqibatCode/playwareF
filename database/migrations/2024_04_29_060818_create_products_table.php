<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('productTitle');
            $table->string('brandName')->default('Generic');
            $table->string('productCategory');
            $table->string('AboutThisitem');
            $table->integer('productQuantity');
            $table->string('productSku');
            $table->string('Manufacturer');
            $table->string('CountryOfOrigin');
            $table->text('productDescription');
            $table->string('mainImage');
            $table->string('firstImage');
            $table->string('secondImage');
            $table->string('thirdImage');
            $table->string('fourthImage')->nullable();
            $table->string('fifthImage')->nullable();
            $table->integer('approved');
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

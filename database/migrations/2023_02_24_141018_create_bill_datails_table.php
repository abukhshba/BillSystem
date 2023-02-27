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
                   Schema::create('bill_details', function (Blueprint $table) {
                    $table->id();
                    $table->foreignId('bill_id')->references('id')->on('bills')->onDelete('cascade' );
                    $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade' );
                    $table->integer('product_price');
                    $table->integer('quantity');
                    $table->integer('total');
    
                    $table->timestamps();
                });
            }

            /**
             * Reverse the migrations.
             */
            public function down(): void
            {
                Schema::dropIfExists('bill_details');
            }
        };
   
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10);
            $table->string('status', 20);
            $table->string('url', 200);
            $table->string('creator', 20);
            $table->string('creator_t', 20);
            $table->string('last_modified_t', 20);
            $table->string('product_name', 50);
            $table->string('quantity', 50);
            $table->string('brands', 50);
            $table->string('categories', 150);
            $table->string('labels', 150);
            $table->string('cities', 150);
            $table->string('purchase_places', 50);
            $table->string('stores', 50);
            $table->string('ingredients_text', 250);
            $table->string('traces', 250);
            $table->string('serving_size', 50);
            $table->integer('serving_quantity');
            $table->integer('nutriscore_score');
            $table->string('nutriscore_grade', 2);
            $table->string('main_category', 40);
            $table->string('image_url', 250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

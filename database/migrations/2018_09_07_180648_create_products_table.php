<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->integer('brand_id')->unsigned()->index();
            $table->foreign('brand_id')->references('id')->on('brands');

            $table->string('sku');
            $table->string('model_no')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->text('specification')->nullable();
            $table->integer('weight')->default(0)->comment = 'in gram';
            $table->integer('base_price');
            $table->enum('discount_type', ['flat', 'percentage'])->nullable();
            $table->integer('discount_value')->default(0);
            $table->integer('discount_price')->default(0);
            $table->text('product_image')->nullable();

            $table->integer('views')->default(0)->comment = 'How many times product viewed';
            $table->enum('featured_product', ['enable', 'disable'])->nullable();
            $table->enum('status', ['enable', 'disable']);

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

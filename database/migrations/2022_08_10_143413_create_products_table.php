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
            
            // Foriagns
            $table->unsignedBigInteger('availability_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('capacity_id')->nullable();
            $table->unsignedBigInteger('catgory_id')->nullable();
            $table->unsignedBigInteger('style_id')->nullable();
            
            // name
            $table->string('name');
            $table->string('slug');
            $table->string('sku')->nullable();
            
            // price
            $table->string('price');

            // details
            $table->text('description')->nullable();
            $table->text('key_features')->nullable();
            $table->string('warranty')->nullable();
            $table->string('available')->default(1);
            // size
            $table->string('height')->nullable();
            $table->string('width')->nullable();
            $table->string('depth')->nullable();

            // times
            $table->dateTime('available_in')->nullable();
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

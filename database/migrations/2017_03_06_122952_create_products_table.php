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
            $table->string('name');
            $table->string('slug');
            $table->integer('price_new')->default(0);
            $table->integer('price_old')->default(0);
            $table->text('intro')->default(null);
            $table->longText('content')->default(null);
            $table->string('image')->default(null);
            $table->integer('cate_id')->default(0);
            $table->string('keywords')->default(null);
            $table->string('description')->default(null);
            $table->integer('status_sale')->default(0);
            $table->boolean('is_selling')->default(0);
            $table->integer('status')->default(1);
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

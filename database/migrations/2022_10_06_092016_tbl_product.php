<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->integer('category_id');
            $table->integer('product_name');
            $table->integer('product_price');
            $table->integer('product_type');
            $table->integer('product_kilomet');
            $table->integer('product_address');
            $table->integer('product_status');
            $table->integer('product_desc');
            $table->integer('product_content');

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
        Schema::dropIfExists('tbl_product');
    }
};

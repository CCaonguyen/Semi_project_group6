<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $product) {
            $product -> increments('productid') ;
            $product -> string('productname');
            $product -> string('price');
            $product -> string('categoryid');
            $product -> string('colorid');
            $product -> string('sizeid');
       
            $product -> string('image');
            $product -> string('description');


            // $product->foreign('category')->references('categoryid')->on('category');
            // $product->foreign('color')->references('colorid')->on('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

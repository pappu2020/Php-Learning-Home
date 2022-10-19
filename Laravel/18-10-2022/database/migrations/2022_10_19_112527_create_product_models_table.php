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
        Schema::create('product_models', function (Blueprint $table) {
            $table->id();
            $table->string("product_name");
            $table->integer("category_id");
            $table->integer("Subcategory_id");
            $table->integer("product_Price");
            $table->integer("product_Discount")->nullable();
            $table->integer("After_discount");
            $table->string("product_Brand")->nullable();
            $table->string("product_Short_desp")->nullable();
            $table->longText("product_Long_desp");
            $table->longText("product_preview_img")->nullable();
            $table->string("slug");
            $table->string("created_by");
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
        Schema::dropIfExists('product_models');
    }
};




<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProductSubImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_product_sub_images', function (Blueprint $table) {
            $table->id();
            $table->text('sub_images_id')->nullable();
            $table->text('product_sub_id')->nullable();
            $table->text('product_id')->nullable();
            $table->text('delete_id')->nullable();
            $table->text('images')->nullable();
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
        Schema::dropIfExists('tb_product_sub_images');
    }
}

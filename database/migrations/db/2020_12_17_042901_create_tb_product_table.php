<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_product', function (Blueprint $table) {
            $table->id();
            $table->text('product_id')->nullable();
            $table->text('delete_id')->nullable();
            $table->text('images')->nullable();
            $table->text('title_en')->nullable();
            $table->text('title_th')->nullable();
            $table->text('detail_en')->nullable();
            $table->text('detail_th')->nullable();
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
        Schema::dropIfExists('tb_product');
    }
}

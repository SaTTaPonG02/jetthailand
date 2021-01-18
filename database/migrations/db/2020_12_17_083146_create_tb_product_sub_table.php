<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProductSubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_product_sub', function (Blueprint $table) {
            $table->id();
            $table->text('sub_product_id')->nullable();
            $table->text('sub_delete_id')->nullable();
            $table->text('delete_id')->nullable();
            $table->text('title_en')->nullable();
            $table->text('title_th')->nullable();
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
        Schema::dropIfExists('tb_product_sub');
    }
}

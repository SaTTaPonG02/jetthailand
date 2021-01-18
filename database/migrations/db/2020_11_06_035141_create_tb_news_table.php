<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_news', function (Blueprint $table) {
            $table->id();
            $table->date('datetime')->nullable();
            $table->text('images_1')->nullable();
            $table->text('images_2')->nullable();
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
        Schema::dropIfExists('tb_news');
    }
}

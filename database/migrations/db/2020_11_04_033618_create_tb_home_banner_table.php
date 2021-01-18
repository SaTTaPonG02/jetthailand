<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbHomeBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_home_banner', function (Blueprint $table) {
            $table->id();
            $table->text('images_pc')->nullable();
            $table->text('images_mb')->nullable();
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
        Schema::dropIfExists('tb_home_banner');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatagoriesTablee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catagories_tablee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',128)->unique();
            $table->string('slug',128)->unique();
            $table->string('banner',128);
            $table->unsignedInteger('catagory_id')->nullable();
            $table->foreign('catagory_id')->references('id')->on('catagories_tablee')->onDelete('cascade');

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
        Schema::dropIfExists('catagories_tablee');
    }
}

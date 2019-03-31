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
            $table->Increments('id');
            $table->unsignedInteger('catagory_id');
            $table->string('title',128)->unique();
            $table->string('slug',156)->unique();
            $table->tinyInteger('in_stock')->default(true);
            $table->text('description');
            $table->decimal('price',8,2);
            $table->decimal('sale_price',8,2)->nullable();
            $table->tinyInteger('active')->default(1);
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

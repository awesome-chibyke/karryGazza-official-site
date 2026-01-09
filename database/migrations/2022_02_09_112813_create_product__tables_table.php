<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product__tables', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id');
            $table->string('category_unique_id');
            $table->string('product_name');
            $table->string('price');
            $table->string('cancelled_price')->default(0);
            $table->string('thumbnail');
            $table->string('discount')->default(0);
            $table->string('quantity')->default(0);
            $table->string('tax')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('product__tables');
    }
}

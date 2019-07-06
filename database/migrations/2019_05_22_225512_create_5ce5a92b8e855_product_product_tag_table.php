<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5ce5a92b8e855ProductProductTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('product_product_tag')) {
            Schema::create('product_product_tag', function (Blueprint $table) {
                $table->integer('product_id')->unsigned()->nullable();
                $table->foreign('product_id', 'fk_p_307001_307000_produc_5ce5a92b8e9d4')->references('id')->on('products')->onDelete('cascade');
                $table->integer('product_tag_id')->unsigned()->nullable();
                $table->foreign('product_tag_id', 'fk_p_307000_307001_produc_5ce5a92b8eab4')->references('id')->on('product_tags')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_product_tag');
    }
}

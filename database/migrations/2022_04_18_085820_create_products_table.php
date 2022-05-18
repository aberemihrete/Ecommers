<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('unit')->nullable();
            $table->double('price',82)->nullable();
            $table->integer('quantity')->nullable();
            $table->timestamps();
         $table->unsignedBigInteger('Catagories_id')->foreign('Catagories_id')->references('id')->on('catagories')->onDelete('cascade');
           
           // $table->unsignedBigInteger('Catagories_id');
           // $table->foreign('Catagories_id')->references('id')->on('Catagories')->onDelete('cascade');
            });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
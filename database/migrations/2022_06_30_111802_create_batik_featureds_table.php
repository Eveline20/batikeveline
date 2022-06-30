<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batik_featureds', function (Blueprint $table) {
            $table->id();
            // 1st method
            // $table->bigInteger('product_id')->unsigned();
            // $table->string('name');
            // $table->timestamps();

            // 2nd method
            $table->bigInteger('product_id')->constrained();
            $table->string('name');
            $table->timestamps();

            // 1st method
           // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batik_featureds');
    }
};

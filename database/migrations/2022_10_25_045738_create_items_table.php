<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('internal_code');
            $table->string('name');
            $table->decimal('price',10,2)->default(0.00);
            $table->string('description')->nullable();
            $table->unsignedBigInteger('family_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('trademark_id');
            $table->string('avatar01')->nullable();
            $table->string('avatar01')->nullable();
            $table->string('avatar03')->nullable();
            $table->tinyInteger('condition')->default(1);
            $table->timestamps();
            $table->foreign('family_id')->references('id')->on('families');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('trademark_id')->references('id')->on('trademarks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFashionSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fashion_size', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fashion_id')->references('id')->on('fashions')->onDelete('cascade');
            $table->foreignId('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->integer('quantity')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fashion_size');
    }
}

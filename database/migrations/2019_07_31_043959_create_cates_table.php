<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('alias')->nullable();
            $table->string('order')->nullable();
            $table->string('parent_id');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('cates');
    }
}

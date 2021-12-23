<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('times', function (Blueprint $table) {
            $table->id();
            $table->time('sat')->default('00:00');
            $table->time('sun')->default('00:00');
            $table->time('mon')->default('00:00');
            $table->time('tus')->default('00:00');
            $table->time('wed')->default('00:00');
            $table->time('thu')->default('00:00');
            $table->time('fri')->default('00:00');
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
        Schema::dropIfExists('times');
    }
}

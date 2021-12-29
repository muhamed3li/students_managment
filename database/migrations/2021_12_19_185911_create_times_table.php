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
            $table->timeTz('sat')->default('00:00');
            $table->timeTz('sun')->default('00:00');
            $table->timeTz('mon')->default('00:00');
            $table->timeTz('tus')->default('00:00');
            $table->timeTz('wed')->default('00:00');
            $table->timeTz('thu')->default('00:00');
            $table->timeTz('fri')->default('00:00');
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

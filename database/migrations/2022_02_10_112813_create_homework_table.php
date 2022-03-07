<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homework', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('homework_max')->nullable();
            $table->float('homework_min')->nullable();
            $table->unsignedBigInteger('level_id')->nullable();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->date('deadline');
            $table->timestamps();


            $table->foreign('level_id')
                ->references('id')
                ->on('levels')
                ->onDelete('set null');
            
            $table->foreign('group_id')
                ->references('id')
                ->on('groups')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homework');
    }
}

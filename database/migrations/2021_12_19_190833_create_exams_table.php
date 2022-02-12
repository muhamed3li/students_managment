<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('level_id')->nullable();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->date('exam_date');
            $table->float('exam_max');
            $table->float('exam_min');
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
        Schema::dropIfExists('exams');
    }
}

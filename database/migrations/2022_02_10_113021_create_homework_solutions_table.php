<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeworkSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homework_solutions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('homework_id')->nullable();
            $table->boolean('solved')->default(false);
            $table->date('solved_at');
            $table->timestamps();


            $table->foreign('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('set null');

            $table->foreign('homework_id')
            ->references('id')
            ->on('homework')
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
        Schema::dropIfExists('homework_solutions');
    }
}

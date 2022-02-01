<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('gender');
            $table->string('address')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('phone')->nullable();
            // $table->string('father_name');
            $table->string('father_phone')->nullable();
            $table->string('school')->nullable();
            $table->enum('status',['reserve','in','out','fired']);
            $table->decimal('reserve_paid')->nullable();
            $table->unsignedBigInteger('level_id')->nullable();
            $table->unsignedBigInteger('group_id')->nullable();
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
        Schema::dropIfExists('students');
    }
}

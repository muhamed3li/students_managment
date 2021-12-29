<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('level_id')->nullable();
            $table->unsignedBigInteger('time_id')->nullable()->unique();
            $table->timestamps();

            $table->foreign('level_id')
                ->references('id')
                ->on('levels')
                ->onDelete('set null');
            
            $table->foreign('time_id')
                ->references('id')
                ->on('times')
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
        Schema::dropIfExists('groups');
    }
}

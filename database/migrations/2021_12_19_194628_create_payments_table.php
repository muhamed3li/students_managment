<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->date('pay_from');
            $table->date('pay_to');
            $table->decimal('month_paid');
            $table->decimal('malazem_paid');
            $table->decimal('discount')->default(0);
            $table->decimal('total');
            $table->unsignedBigInteger('student_id')->nullable();
            // $table->unsignedBigInteger('group_id')->nullable();
            $table->timestamps();

            $table->foreign('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('set null');

            // $table->foreign('group_id')
            // ->references('id')
            // ->on('groups')
            // ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentExitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_exits', function (Blueprint $table) {
            $table->id();
            $table->date('exit_date')->comment('تاريخ الخروج');
            $table->string('exit_reason')->comment('سبب الخروج');
            $table->foreignId('student_id')->references('id')->on('students')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('student_exits');
    }
}

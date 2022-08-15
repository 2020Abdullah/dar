<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscapesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escapes', function (Blueprint $table) {
            $table->id();
            $table->date('date_escape')->comment('تاريخ الهروب');
            $table->string('how_escape')->nullable()->comment('كيفية الهروب');
            $table->date('date_back')->comment('تاريخ العودة');
            $table->string('how_back')->nullable()->comment('كيفية العودة');
            $table->string('number_back')->comment('عدد مرات الهروب');
            $table->string('reason_back')->nullable()->comment('العودة وسببها');
            $table->foreignId('student_id')->references('id')->on('students')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('escapes');
    }
}

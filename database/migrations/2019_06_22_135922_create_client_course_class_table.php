<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientCourseClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_course_class', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id')->nullable(false);
            $table->unsignedBigInteger('course_class_id')->nullable(false);
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('course_class_id')->references('id')->on('course_classes');

            $table->unique(['client_id', 'course_class_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_course');
    }
}

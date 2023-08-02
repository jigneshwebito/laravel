<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_info', function (Blueprint $table) {
            $table->id();
            $table->string('position_applied')->nullable();
            $table->string('u_name')->nullable();
            $table->integer('u_age')->nullable();
            $table->string('u_gender')->nullable();
            $table->string('u_location')->nullable();
            $table->bigInteger('u_number')->nullable();
            $table->string('u_gmail')->nullable();
            $table->string('u_qualification')->nullable();
            $table->longText('ssc')->nullable();
            $table->longText('hsc')->nullable();
            $table->longText('graducation')->nullable();
            $table->longText('pg_diploma')->nullable();
            $table->longText('other_graducation')->nullable();
            $table->string('experience_year')->nullable();
            $table->string('present_salary')->nullable();
            $table->string('type_e_seeking')->nullable();
            $table->string('resume')->nullable();
            $table->longText('ip')->nullable();
            $table->longText('time')->nullable();
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
        Schema::dropIfExists('personal_info');
    }
};

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
        Schema::create('emp_skill', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('technical_skill', 500)->nullable();
            $table->string('personal_attribute', 500)->nullable();
            $table->string('professional_detail', 500)->nullable();
            $table->string('work_areas', 500)->nullable();
            $table->string('dislike_current_company', 500)->nullable();
            $table->string('describe_co_workers', 500)->nullable();
            $table->string('change_company_reason', 500)->nullable();
            $table->string('night_sheeft', 500)->nullable();
            $table->string('family_background', 500)->nullable();
            $table->timestamp('time')->useCurrent();
            $table->string('ip', 200)->nullable();
            $table->date('created_at')->nullable();
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_skill');
    }
};

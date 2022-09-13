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
        Schema::create('leave_apps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText("Description");
            $table->unsignedBigInteger('emp_id');
            $table->unsignedBigInteger('Dep_id');
            $table->unsignedBigInteger('leave_id');
            $table->DATETIME('startDate');
            $table->DATETIME('endDate');
            $table->enum('status',['pending', 'approved' ,'rejected']);
            $table->foreign('Dep_id')->references('Dep_id')->on('employees')->cascadeOnDelete();
            $table->foreign('emp_id')->references('id')->on('employees')->cascadeOnDelete();
            $table->foreign('leave_id')->references('id')->on('leave_types')->cascadeOnDelete();
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
        Schema::dropIfExists('leave_apps');
    }
};

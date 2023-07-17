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
        Schema::create('assigned_employees', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('FullName');
            $table->string('Email')->unique();
            $table->string('Faculty');
            $table->string('Position');
            $table->integer('OfficeNo');
            $table->string('PhoneNo')->primary();
            $table->timestamp('Date');

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assigned_employees');
    }
};

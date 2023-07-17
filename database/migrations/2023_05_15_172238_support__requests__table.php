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
        Schema::create('support_requests', function (Blueprint $table) {
            $table->string('FullName');
            $table->string('Email')->unique();
            $table->string('FacultyName');
            $table->string('Department');
            $table->integer('OfficeNo');
            $table->string('photo')->nullable();
            $table->string('PhoneNo');
            $table->timestamp('Date');
            $table->string('SupportStatus')->default("Pending");
            $table->id('RequestNo');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_requests');
    }
};

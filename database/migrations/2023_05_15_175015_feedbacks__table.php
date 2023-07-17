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
        Schema::create('Feedbacks', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('feedback_request');
            $table->string('FullName');
            $table->string('Email')->unique();
            $table->longText('Comments');
            $table->id('FeedbackId');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('feedback_request')->references('RequestNo')->on('support_requests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Feedbacks');
    }
};

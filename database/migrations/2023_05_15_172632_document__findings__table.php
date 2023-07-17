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
        Schema::create('document_findings', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('RequestNumber');
            $table->timestamp('AssignedAt');
            $table->longText('FindingDescription');
            $table->date('AssignemntCompleted');
            $table->string('EndResult');
            $table->string('ProblemStatus');
            $table->id('FindingId');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('RequestNumber')->references('RequestNo')->on('support_requests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document_findings');
    }
};

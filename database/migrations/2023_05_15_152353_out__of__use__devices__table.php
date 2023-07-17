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
        Schema::create('out_of_use_devices', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('CampusName');
            $table->string('Department');
            $table->integer('OfficeNo');
            $table->string('ItemName');
            $table->id('ItemID');
            $table->string('Catagory');
            $table->longText('Reason');
            $table->string('ApprovedByEmail')->unique();
            $table->timestamp('Date');
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
        Schema::dropIfExists('out_of_use_devices');
    }
};

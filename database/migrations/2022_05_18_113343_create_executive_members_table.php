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
        Schema::create('executive_members', function (Blueprint $table) {
            $table->id();
            $table->string('member_name',50);
            $table->string('member_title',50);
            $table->string('member_phone_no',15);
            $table->string('image');
            $table->text('member_info');
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
        Schema::dropIfExists('executive_members');
    }
};

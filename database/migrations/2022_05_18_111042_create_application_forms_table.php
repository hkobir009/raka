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
        Schema::create('application_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_position_id')->constrained()->onDelete('restrict');
            $table->string('name',50);
            $table->string('mobile_no',15);
            $table->string('subject')->nullable();
            $table->string('email')->nullable();
            $table->text('message')->nullable();
            $table->file('pdf_file');
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
        Schema::dropIfExists('application_forms');
    }
};

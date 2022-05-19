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
        Schema::create('current_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onDelete('restrict');
            $table->string('current_project_title',200);
            $table->string('fontawesome_logo',50);
            $table->string('image');
            $table->text('current_project_description');
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
        Schema::dropIfExists('current_projects');
    }
};

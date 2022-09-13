<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LinkTemplateToJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('linktemplatetojobs', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('job_id');
            // $table->unsignedBigInteger('template_id');
            // $table->foreign('job_id')->references('id')->on('jobs');
            // $table->foreign('template_id')->references('id')->on('hiring_templates');
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
        Schema::dropIfExists('linktemplatetojobs');
    }
}

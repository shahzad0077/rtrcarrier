<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumPlanIdInJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->string('plan_id')->nullable();
            $table->string('payement_id')->nullable();
            $table->string('payement_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn('plan_id')->nullable();
            $table->dropColumn('payement_id')->nullable();
            $table->dropColumn('payement_status')->nullable();
        });
    }
}

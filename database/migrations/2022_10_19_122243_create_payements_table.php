<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payements', function (Blueprint $table) {
            $table->id();
            $table->string('currency')->nullable();
            $table->string('charge_id')->nullable();
            $table->string('payment_channel')->nullable();
            $table->string('description')->nullable();
            $table->string('amount')->nullable();
            $table->string('plan_id')->nullable();
            $table->string('status')->nullable();
            $table->string('job_id')->nullable();
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
        Schema::dropIfExists('payements');
    }
}

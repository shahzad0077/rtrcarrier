<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrrientationtemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orrientationtemplates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->string('orrienntationdays')->nullable();
            $table->string('orrientationtime')->nullable();
            $table->string('pay')->nullable();
            $table->string('pay_type')->nullable();
            $table->string('pay_dates')->nullable();
            $table->string('transportation')->nullable();
            $table->string('mealesprovided')->nullable();
            $table->string('whichmealesprovided')->nullable();
            $table->string('hotel_name')->nullable();
            $table->string('hotel_address')->nullable();
            $table->string('people_per_room')->nullable();
            $table->string('are_pets_allowed')->nullable();
            $table->string('reimbursements')->nullable();
            $table->string('reimbursements_text')->nullable();
            $table->string('is_the_physical_required_at_orientation')->nullable();
            $table->string('orientation_programs')->nullable();
            $table->string('is_orientation_online')->nullable();
            $table->longtext('is_orientation_online_information')->nullable();
            $table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('orrientationtemplates');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            $table->string('message')->nullable();
            $table->string('read')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('sendBy');
            $table->unsignedBigInteger('sendTo');
            $table->unsignedBigInteger('first_message')->nullable();
            $table->foreign('sendBy')->references('id')->on('users');
            $table->foreign('sendTo')->references('id')->on('users');
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
        Schema::dropIfExists('chat_messages');
    }
}

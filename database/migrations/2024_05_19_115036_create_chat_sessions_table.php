<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('chat_sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user1_id');
            $table->foreign('user1_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('user2_id');
            $table->foreign('user2_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('user1_id')->references('id')->on('agents')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('user2_id')->references('id')->on('agents')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('user2_id')->constrained('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chat_sessions');
    }
}

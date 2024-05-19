<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50);
            $table->string('password');
            $table->string('email')->unique();
            $table->string('gender', 10)->nullable();
            $table->string('blood_type', 5)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('location', 100)->nullable();
            $table->string('type', 20);
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

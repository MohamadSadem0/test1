<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneDataTable extends Migration
{
    public function up()
    {
        Schema::create('phone_data', function (Blueprint $table) {
            $table->id();
            $table->timestamp('timestamp');
            $table->string('location', 100);
            $table->binary('sound_data'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('phone_data');
    }
}

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSafeZonesTable extends Migration
{
    public function up()
    {
        Schema::create('safe_zones', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('location', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('safe_zones');
    }
}

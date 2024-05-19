<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalloonDetectionsTable extends Migration
{
    public function up()
    {
        Schema::create('balloon_detections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->timestamp('detection_time');
            $table->boolean('explosion')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('balloon_detections');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BalloonDetection extends Model
{
    protected $primaryKey = 'detection_id';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    protected $primaryKey = 'confirmation_id';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

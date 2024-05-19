<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $primaryKey = 'reset_id';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

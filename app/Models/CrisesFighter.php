<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrisesFighter extends Model
{
    protected $primaryKey = 'user_id';
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

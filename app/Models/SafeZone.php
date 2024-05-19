<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafeZone extends Model
{
    use HasFactory;

    protected $primaryKey = 'safe_zone_id';

    protected $fillable = [
        'name', 'location'
    ];
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneData extends Model
{
    use HasFactory;

    protected $primaryKey = 'phone_id';

    protected $fillable = [
        'timestamp', 'location', 'sound_data'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username', 'password', 'email', 'gender', 'blood_type', 'phone_number', 'date_of_birth', 'location', 'type',
    ];

    public function confirmation()
    {
        return $this->hasOne(Confirmation::class);
    }

    public function passwordResets()
    {
        return $this->hasMany(PasswordReset::class);
    }

    public function chatSessionsAsInitiator()
    {
        return $this->hasMany(ChatSession::class, 'user1_id');
    }

    public function chatSessionsAsRecipient()
    {
        return $this->hasMany(ChatSession::class, 'user2_id');
    }

    public function messagesAsSender()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function messagesAsReceiver()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }

    public function balloonDetections()
    {
        return $this->hasMany(BalloonDetection::class);
    }

    public function phoneData()
    {
        return $this->hasMany(PhoneData::class);
    }
}

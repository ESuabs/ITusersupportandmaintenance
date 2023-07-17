<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class users extends Model
{
    use HasFactory;
    // public $timestamps = false;
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'feedback_request',
        'role',
    ];
}

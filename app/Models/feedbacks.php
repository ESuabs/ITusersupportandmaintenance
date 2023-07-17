<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class feedbacks extends Model
{
    public $timestamps = false;
    use HasFactory, Notifiable;
    // user_id, feedback_request, FullName, Email, Comments, FeedbackId
    protected $fillable = [
        'FullName',
        'Email',
        'Comments',
        'user_id',
        'feedback_request',
        'FeedbackId',
    ];
}

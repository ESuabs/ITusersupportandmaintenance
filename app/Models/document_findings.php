<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class document_findings extends Model
{
    public $timestamps = false;
    use HasFactory, Notifiable;
    // user_id, RequestNumber, AssignedAt, FindingDescription, AssignemntCompleted, EndResult, ProblemStatus, FindingId
    protected $fillable = [
        'user_id',
        'RequestNumber',
        'AssignedAt',
        'FindingDescription',
        'AssignemntCompleted',
        'EndResult',
        'ProblemStatus',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class support_requests extends Model
{
    public $table = 'support_requests';
    public $timestamps = false;
    use HasFactory, Notifiable;
    protected $fillable = [
        // FullName, Email, FacultyName, Department, OfficeNo, photo, PhoneNo, Date, SupportStatus, RequestNo, user_id
        'FullName',
        'Email',
        'FacultyName',
        'Department',
        'OfficeNo',
        'photo',
        'PhoneNo',
        'Date',
        'SupportStatus',
        'RequestNo',
        'user_id',
    ];
}

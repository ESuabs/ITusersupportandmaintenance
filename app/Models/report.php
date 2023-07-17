<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class report extends Model
{
    public $table = 'report';
    public $timestamps = false;
    use HasFactory, Notifiable;
    //user_id, ReportNo, FullName, Email, Title, CampusName, Department, PhoneNo, Date, summary
    protected $fillable = [
        'user_id',
        'FullName',
        'Email',
        'Title',
        'CampusName',
        'Department',
        'PhoneNo',
        'summary',
        'Date',
        'ReportNo',
    ];
}

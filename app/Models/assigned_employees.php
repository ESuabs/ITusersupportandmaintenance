<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class assigned_employees extends Model
{
    public $timestamps = false;
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'FullName',
        'Email',
        'Faculty',
        'Position',
        'OfficeNo',
        'PhoneNo',
        'Date',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class out_of_use_devices extends Model
{
    public $table = 'out_of_use_devices';
    public $timestamps = false;
    use HasFactory, Notifiable;
    protected $fillable = [
        // user_id, CampusName, Department, OfficeNo, ItemName, ItemID, Catagory, Reason, ApprovedByEmail, Date
        'user_id',
        'CampusName',
        'Department',
        'OfficeNo',
        'ItemName',
        'Catagory',
        'Reason',
        'ApprovedByEmail',
        'Date',

    ];
}

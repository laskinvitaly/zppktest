<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';
    
    protected $fillable = [
        'student_id',
        'date_attendance',
    ];
}

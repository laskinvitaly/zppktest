<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'passport',
        'document_on_education',
        'medical_certificate',
        'vaccination_certificate',
        'snils',
    ];
}

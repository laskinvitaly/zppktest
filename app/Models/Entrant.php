<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Entrant extends Model
{
    use HasFactory;

    protected $table = 'entrants';

    protected $fillable = [
        'user_id',
        'phone',
        'passport',
        'document_on_education',
        'medical_certificate',
        'vaccination_certificate',
        'snils',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}

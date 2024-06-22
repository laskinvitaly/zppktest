<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Spetsialnost;

class Entrant extends Model
{
    use HasFactory;

    protected $table = 'entrants';

    protected $fillable = [
        'user_id',
        'vkontakte',
        'spetsialnost_id',
        'rating',
        'sirota',
        'outregion',
        'passport',
        'passport_seria',
        'passport_number',
        'passport_propiska',
        'passport_dr',
        'document_on_education',
        'document_on_education_name',
        'document_on_education_year',
        'snils',
        'snils_number',
        'medical_certificate',
        'vaccination_certificate',
        'phone',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function spetsialnost()
    {
      return $this->belongsTo(Spetsialnost::class);
    }
}

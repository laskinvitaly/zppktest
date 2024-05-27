<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class EntraintSubject extends Model
{
    use HasFactory;

    protected $table = 'entraint_subjects';

    protected $fillable = [
        'entrant_id',
        'subject_id',
        'ocenka',
    ];
    public function subject()
    {
      return $this->belongsTo(Subject::class);
    }
}

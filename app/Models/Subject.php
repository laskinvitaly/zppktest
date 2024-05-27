<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EntraintSubject;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';

    protected $fillable = [
        'subject_name',
    ];
    
    public function subject_ent()
    {
      return $this->hasMany(EntraintSubject::class);
    }
}

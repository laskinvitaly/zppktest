<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spetsialnost extends Model
{
    use HasFactory;
    protected $table = 'spetsialnosts';

    protected $fillable = [
        'spets_number',
        'spets_name',
    ];

    protected $guarded = false;
}

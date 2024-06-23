<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entrant;

class Spetsialnost extends Model
{
    use HasFactory;
    protected $table = 'spetsialnosts';

    protected $guarded = false;

}

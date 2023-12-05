<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestRegister extends Model
{
    use HasFactory;
    protected $table = 'request_registers';
    protected $guarded = false;
}

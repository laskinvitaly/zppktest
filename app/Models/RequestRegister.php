<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestRegister extends Model
{
    use HasFactory;
    protected $table = 'request_registers';
    protected $guarded = false;

    public function sername()
    {
        $mas = explode(" ", $this->fio);
        if (isset($mas[0])){
            $val = $mas[0];
        } 
        return $val;
    }

    public function name()
    {
        $mas = explode(" ", $this->fio);
        if (isset($mas[1])){
            $val = $mas[1];
        } 
        return $val;
    }

    public function parentname()
    {
        $mas = explode(" ", $this->fio);
        if (isset($mas[2])){
            $val = $mas[2];
        } 
        return $val;
    }
}

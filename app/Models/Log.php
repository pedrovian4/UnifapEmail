<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;


    protected $table = 'logs'; 
    protected $fillable=[
        'id',
        'student_name',
        'tuition_number',
        'sigaa_user',
        'tuituion_status'
    ];


}

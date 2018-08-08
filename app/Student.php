<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['firstname', 'lastname', 'matric_num', 'level', 'email', 'institution', 'password', 'p_w', ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newcoursereg extends Model
{
    protected $fillable = ['staff_id', 'institution', 'level', 'course_code' ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assignment extends Model
{
    protected $fillable = ['staff_id', 'institution', 'level', 'course_code', 'ass_question', 'filename', 'remarks'];
}

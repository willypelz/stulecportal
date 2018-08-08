<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['firstname', 'lastname', 'title', 'email', 'staff_id', 'password',  ];
}

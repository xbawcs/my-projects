<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['id', 'code', 'name', 'dob', 'gender', 'address', 'avatar']; 
}

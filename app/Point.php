<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $table = 'points';

    protected $fillable = ['id', 'student_code', 'subject_code', 'L1', 'L2'];

    public function student(){
    	
    }
}

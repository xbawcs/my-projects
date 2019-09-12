<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
    protected $table = 'classes';

    protected $fillable = ['id', 'code', 'name', 'number_student'];

    public function students(){
    	return $this->hasMany('App\Student', 'class_code');
    }
}

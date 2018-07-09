<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
	use SoftDeletes;
    protected $table = 'students';
    protected $fillable = ['id', 'code', 'name', 'dob', 'gender', 'address', 'avatar', 'class_code'];
    protected $dates = ['deleted_at'];
    public function class(){
    	return $this->belongsTo('App\Class');
    }
    public function points(){
    	return $this->hasMany('App\Point');
    }
}

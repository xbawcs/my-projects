<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $fillable = ['id', 'code', 'name'];

    public function point(){
    	return $this->hasOne('App\Point', 'subject_code');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $fillable = ['id', 'name', 'email', 'password', 'session', 'level', 'facebook_id']; 

    public function addAdmin($input){
    	$admin = static::where('facebook_id', $input['facebook_id'])->first();
    	if(is_null($admin)){
    		return static::create($input);
    	}
    	return $check;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
	protected $fillable = ['id','name', 'email', 'image','phone','user_id','password','created_at','updated_at'];

}

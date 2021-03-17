<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

     function blogWriter(){
     	return $this->hasOne(User::class,'id','user_id');
     }   

}

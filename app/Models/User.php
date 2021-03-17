<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function getUserRelation(){
        return $this->hasOne('App\Models\Blog','user_id','id');
    }
    public function getPostRelation(){
        return $this->hasMany('App\Models\Blog','user_id','id');
    }
}

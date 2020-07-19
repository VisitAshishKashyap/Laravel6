<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

use App\User;
use App\UserProfile;

class Post extends Model
{
    //
    use SoftDeletes;
    protected $guarded=[];


    public function user()
    {
      return $this->belongsTo(User::class,'user_id','id');
    }

    public function profile()
    {

    	return $this->hasOneThrough(UserProfile::class,User::class,'id','user_id','user_id');
    }
}

<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\USerProfile;
use App\Post;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey='username';

    protected $keyType='string';

    public $increment=false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

       // protected static function boot(){

       //  parent::boot();
       //  static::addGlobalScope('vfu',function(Builder $builder){
       //            return $builder->where('email_verified_at','<>',null);

       //      });
       // }


       public function profile(){
        return $this->hasOne(UserProfile::class,'user_id','id');
       } 

       public function posts(){

        return $this->hasMany(Post::class,'user_id','id');
       }

       public function roles(){

        return $this->belongsToMany(Role::class,'role_user','role_id','user_id','id');
       }
    
}

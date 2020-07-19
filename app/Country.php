<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
   protected $guarded=[]; 

   public function posts(){

   	return $this->hasManyThrough(
   		Post::class,  // related table
   		UserProfile::class,  //through table
   		'country_id', // fk in through tbale
   		
   		'user_id', //fk in related table
   		'id',  //local key
   		'user_id' // fk of through table
   	);
   }

}

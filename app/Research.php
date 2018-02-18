<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
  protected $fillable=['profile_id','topic','status','fundingsource','value','startdate','amountexpended'];

  public function profile(){
    return $this->belongsTo('Profile::class');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
  protected $fillable=['profile_id','name','dob','sex'];

  public function profile(){
    return $this->belongsTo(Profile::class);
  }
}

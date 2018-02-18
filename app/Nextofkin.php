<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nextofkin extends Model
{
  protected $fillable=['profile_id','name','relationship','Address','Telephone'];

  public function profile(){
    return $this->belongsTo(Profile::class);
  }
}

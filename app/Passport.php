<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
  protected $fillable=['profile_id','number','dateofissue','placeofissue'];

  public function profile(){
    return $this->belongsTo(Profile::class);
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
  protected $fillable=['profile_id','title','date','publisher','category','status','document'];

  public function profile(){
    return $this->belongsTo(Profile::class);
  }
}

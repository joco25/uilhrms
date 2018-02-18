<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Previousemployment extends Model
{
  protected $fillable=['profile_id','name','address','date','lastpostheld','lastsalary','reasonforleaving'];

  public function profile(){
    return $this->belongsTo(Profile::class);
  }
}

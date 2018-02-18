<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicservicerendered extends Model
{
  protected $fillable=['profile_id','typeofservice','details','placeofservice','periodofservice'];

  public function profile(){
    return $this->belongsTo(Profile::class);
  }
}

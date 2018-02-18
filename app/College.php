<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
  protected $fillable=['name'];
  
  public function profiles(){
    return $this->hasMany(Profile::class);
  }
}

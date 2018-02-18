<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  protected $fillable=['name','faculty_id'];

  public function profiles(){
    return $this->hasMany(Profile::class);
  }
}

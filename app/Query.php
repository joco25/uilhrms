<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
  protected $fillable=['staff_id','title','details','status','document','faculty_id','college_id','department_id'];

  public function user(){
    return $this->belongsTo(User::class);
  }

  public function reason(){
    return $this->hasOne(Reason::class);
  }
}

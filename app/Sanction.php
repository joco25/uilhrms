<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanction extends Model
{
    protected $fillable=['staff_id','title','details','document','faculty_id','college_id','department_id'];

  public function user(){
    return $this->belongsTo(User::class);
  }
}

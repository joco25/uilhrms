<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institutionattended extends Model
{
    protected $fillable=['profile_id','name','date','qualification','qualificationdate'];

    public function profile(){
      return $this->belongsTo(Profile::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{	
	protected $table = 'responses';
    protected $fillable=['query_id','title','details'];
    

  public function queries(){
    return $this->belongsTo(Query::class);
  }
}

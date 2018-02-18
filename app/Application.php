<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
  protected $fillable=['user_id','category_id','details','status','startdate','enddate','period','document','faculty_id','college_id','department_id','qoteaching','qoresearch','qopublication','generalrecommendation','percentagescore','commentbypanel','review'];

  public function category(){
    return $this->belongsTo(Applicationcategory::class);
  }

  public function user(){
    return $this->belongsTo(User::class);
  }
}

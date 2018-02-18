<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicationcategory extends Model
{
    protected $fillable=['name'];

    public function application(){
      return $this->hasOne(Application::class);
    }
}

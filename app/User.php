<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function questions() {
        return $this->hasMany(Question::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname','othernames', 'email','password','role','staff_id','status','college_id','department_id','faculty_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function recommendations()
    {
        return $this->hasMany(Recommendation::class);
    }

    public function sanctions()
    {
        return $this->hasMany(Sanction::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function queries()
    {
      return $this->hasMany(Query::class);
    }

    public function isHr(){
     if($this->role == 'hr'){
         return true;
      }
    return false;
   }

   public function isDean(){
     if($this->role == 'dean' ){
         return true;
      }
    return false;
   }

   public function isHOD(){
    if($this->role == 'hod' ){
        return true;
     }
   return false;
  }

  public function isStaff(){
    if($this->role == 'staff' ){
        return true;
     }
   return false;
  }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
      'photoname',
      'sex',
      'dob',
      'pob',
      'religion',
      'nationality',
      'stateoforigin',
      'lga',
      'town',
      'senatorialdistrict',
      'maritalstatus',
      'nameofspouse',
      'hobbies',
      'permanentaddress',
      'contactaddress',
      'phone',
      'college_id',
      'department_id',
      'faculty_id',
      'sscategory',
      'jscategory',
      'fappointment_date',
      'fappointment_salarylevel',
      'fappointment_jobtitle',
      'cappointment_dateonlevel',
      'cappointment_salarylevel',
      'cappointment_jobtitle',
      'employmentstatus',
      'professionalbodies',
      'healthstatus',
      'accomodationstatus',

      'hodapproval',
      'registrarApproval',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function college()
    {
        return $this->belongsTo(College::class);
    }

    public function qualifications(){
      return $this->hasMany(Qualification::class);
    }

    public function researches(){
      return $this->hasMany(Research::class);
    }

    public function children(){
      return $this->hasMany(Children::class);
    }

    public function nextofkin(){
      return $this->hasOne(Nextofkin::class);
    }

    public function previousemployments(){
      return $this->hasMany(Previousemployment::class);
    }

    public function publicservicerendered(){
      return $this->hasMany(publicservicerendered::class);
    }

    public function passports(){
      return $this->hasMany(Passport::class);
    }

    public function institutionattended(){
      return $this->hasMany(Institutionattended::class);
    }
}

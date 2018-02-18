@extends('layouts.admin')

@section('content')
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">Staff Profile</div>
                    </div>
                    <div class="col s12 m12 l12">
                      <form class="col s12" method="POST" action="{{route('updateprofile',$user->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" value="PATCH" name="_method" >
                        <div class="card">
                            <div class="card-content">
                                  <div class="col s12 m12">
                                      <div class="card-panel grey lighten-5 z-depth-1">
                                          <div class="row valign-wrapper">
                                            <div class="col s2">
                                              <img src="{{url('assets/images/profile-image.png')}}" alt="" class="circle responsive-img">
                                            </div>
                                          <div class="col s10">
                                                  <div class="p-v-xs">
                                                  <div class="file-field input-field">
                                                      <div class="btn teal lighten-1">
                                                          <span>File</span>
                                                          <input name="photoname" type="file">
                                                      </div>
                                                      <div class="file-path-wrapper">
                                                          <input class="file-path validate" type="text">
                                                      </div>
                                                  </div>
                                              </div>
                                        </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col s12 m12">
                                      <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
                                          <a class="btn-floating  btn-large red">
                                              <i class="large material-icons">add</i>
                                          </a>
                                          <ul>
                                              <li><a class="btn-floating tooltipped red"  data-position="left" data-delay="50" data-tooltip="Add Passport" href="/addpassport/{{$user->profile->id}}"><i class="material-icons">picture_in_picture</i></a></li>
                                              <li><a class="btn-floating tooltipped yellow darken-1" data-position="left" data-delay="50" data-tooltip="Add Public Service" href="/addpublicservice/{{$user->profile->id}}"><i class="material-icons">language</i></a></li>
                                              <li><a class="btn-floating tooltipped green" data-position="left" data-delay="50" data-tooltip="Add Publication" href="/addpublication/{{$user->profile->id}}"><i class="material-icons">publish</i></a></li>
                                              <li><a class="btn-floating tooltipped blue" data-position="left" data-delay="50" data-tooltip="Add Next of Kin" href="/addnextofkin/{{$user->profile->id}}"><i class="material-icons">trending_down</i></a></li>
                                              <li><a class="btn-floating tooltipped red"  data-position="left" data-delay="50" data-tooltip="Add Child" href="/addchildren/{{$user->profile->id}}"><i class="material-icons">perm_identity</i></a></li>
                                              <li><a class="btn-floating tooltipped yellow darken-1" data-position="left" data-delay="50" data-tooltip="Add Institutions Attended" href="/addinstitution/{{$user->profile->id}}"><i class="material-icons">subtitles</i></a></li>
                                              <li><a class="btn-floating tooltipped green" data-position="left" data-delay="50" data-tooltip="Add Previous Employment" href="/addpreviousemployment/{{$user->profile->id}}"><i class="material-icons">tab</i></a></li>
                                              <li><a class="btn-floating tooltipped blue" data-position="left" data-delay="50" data-tooltip="Add Research" href="/addresearch/{{$user->profile->id}}"><i class="material-icons">tab_unselected</i></a></li>
                                          </ul>
                                      </div>
                                    </div>
                                        <div class="row">
                                          <span class="card-title">Basic Information</span><br>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix" type="text" name="surname" class="validate" value="{{$user->surname}}">
                                                <label for="icon_prefix">SurName</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix" type="text" name="othernames" value="{{$user->othernames}}" class="validate">
                                                <label for="icon_prefix">Other Names</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">mode_edit</i>
                                                <input id="icon_prefix" name="staff_id" type="text" class="validate">
                                                <label for="icon_prefix">Staff ID</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">phone</i>
                                                <select>
                                                    <option value="" disabled selected>Choose your option</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                                <label for="icon_telephone">Gender</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">today</i>
                                                <div class="row">
                                                  <label for="birthdate">Date of Birth</label>
                                                  <input id="birthdate" name="dob" type="text" class="datepicker">
                                                </div>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">mode_edit</i>
                                                <input id="icon_prefix" name="pob" type="text" class="validate">
                                                <label for="icon_prefix">Place of Birth</label>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">mode_edit</i>
                                                <select name="religion">
                                                    <option value="" disabled selected>Choose your option</option>
                                                    <option value="christain">Christian</option>
                                                    <option value="muslim">Muslim</option>
                                                </select>
                                                <label for="icon_telephone">Religion</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_telephone" name="nameofspouse" type="tel" class="validate">
                                                <label for="icon_telephone">Name of Spouse</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_telephone" name="hobbies" type="text" class="validate">
                                                <label for="icon_telephone">Hobbies</label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-content">
                                          <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">mode_edit</i>
                                                <input id="icon_prefix" type="text" name="nationality" class="validate">
                                                <label for="icon_prefix">Nationality</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">mode_edit</i>
                                                <input id="icon_telephone" name="senatorialdistrict" type="text" class="validate">
                                                <label for="icon_telephone">Senatorial District</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">mode_edit</i>
                                                <select name="stateoforigin">
                                                    <option value="" disabled selected>Choose your option</option>
                                                    <option value="Abia">Abia</option>
                                                    <option value="Umuohia">Umuohia</option>
                                                </select>
                                                <label for="icon_telephone">State of Origin</label>
                                            </div>

                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">mode_edit</i>
                                                <input id="icon_telephone" name="lga" type="text" class="validate">
                                                <label for="icon_telephone">LGA</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">mode_edit</i>
                                                <input id="icon_telephone" name="town" type="tel" class="validate">
                                                <label for="icon_telephone">Town/Village</label>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-content">
                                          <span class="card-title">Contact Information</span><br>
                                          <div class="row">
                                              <div class="input-field col s12">
                                                  <i class="material-icons prefix">mode_edit</i>
                                                  <textarea id="icon_prefix2" name="permanentaddress" class="materialize-textarea"></textarea>
                                                  <label for="icon_prefix2">Parmanent Address</label>
                                              </div>
                                              <div class="input-field col s12">
                                                  <i class="material-icons prefix">mode_edit</i>
                                                  <textarea id="icon_prefix2" name="contactaddress" class="materialize-textarea"></textarea>
                                                  <label for="icon_prefix2">Residential Address</label>
                                              </div>
                                              <div class="input-field col s6">
                                                  <i class="material-icons prefix">mode_edit</i>
                                                  <input id="icon_prefix2" name="email" type="email" class="validate">
                                                  <label for="icon_prefix2">Email</label>
                                              </div>
                                              <div class="input-field col s6">
                                                  <i class="material-icons prefix">mode_edit</i>
                                                  <input id="icon_prefix2" name="phone" type="text" class="validate">
                                                  <label for="icon_prefix2">Telephone Number</label>
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-content">
                                              <span class="card-title">Designation</span><br>
                                              <div class="input-field col s12">
                                                  <i class="material-icons prefix">mode_edit</i>
                                                  <select name="college_id">
                                                      <option value="" disabled selected>Choose your option</option>
                                                      <option value="1">Medcine</option>
                                                      <option value="2">Engineering</option>
                                                  </select>
                                                  <label for="icon_telephone">College</label>
                                              </div>
                                              <div class="input-field col s6">
                                                  <i class="material-icons prefix">mode_edit</i>
                                                  <select name="faculty_id">
                                                      <option value="" disabled selected>Choose your option</option>
                                                      <option value="1">Faculty of engineering</option>
                                                      <option value="2">Faculty of Cummunication and Information Sciences</option>
                                                  </select>
                                                  <label for="icon_telephone">Faculty/School</label>
                                              </div>
                                              <div class="input-field col s6">
                                                  <i class="material-icons prefix">mode_edit</i>
                                                  <select name="department_id">
                                                      <option value="" disabled selected>Choose your option</option>
                                                      <option value="1">CSC</option>
                                                      <option value="2">ICS</option>
                                                  </select>
                                                  <label for="icon_telephone">Department</label>
                                              </div>
                                              <div class="row">

                                              <div class="row col s12">
                                                  <label>Senior Staff Category</label><br>
                                                  <div class="col s12">
                                                      <p class="p-v-xs">
                                                          <input name="sscategory" type="radio" value="academic" id="test1" />
                                                          <label for="test1">Academic</label>
                                                      </p>
                                                      <p class="p-v-xs">
                                                          <input name="sscategory" value="administrative" type="radio" id="test2" />
                                                          <label for="test2">Administrative</label>
                                                      </p>
                                                      <p class="p-v-xs">
                                                          <input class="with-gap" name="sscategory" value="technical" type="radio" id="test3"  />
                                                          <label for="test3">Technical</label>
                                                      </p>
                                                  </div>
                                              </div>

                                              <div class="row col s12">
                                                  <label>Junior Staff Category</label><br>
                                                  <div class="col s12">
                                                      <p class="p-v-xs">
                                                          <input name="jscategory" value="administrative" type="radio" id="test4" />
                                                          <label for="test4">Administrative</label>
                                                      </p>
                                                      <p class="p-v-xs">
                                                          <input class="with-gap" name="jscategory" value="technical" type="radio" id="test5"  />
                                                          <label for="test5">Technical</label>
                                                      </p>
                                                  </div>
                                              </div>
                                            </div>

                                        <div class="row">
                                          <div class="input-field col s12">
                                              <i class="material-icons prefix">mode_edit</i>
                                              <textarea id="icon_prefix2" name="professionalbodies" class="materialize-textarea"></textarea>
                                              <label for="icon_prefix2">Membership of Professional Bodies</label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-content">
                                        <span class="card-title">First Appointment</span>
                                        <div class="row">

                                          <div class="input-field col s12">
                                              <i class="material-icons prefix">today</i>
                                              <label for="firstappointment">Date of First Appointment</label>
                                              <input id="firstappointment" name="fappointment_date" type="text" class="datepicker">
                                          </div>
                                          <div class="input-field col s12">
                                              <i class="material-icons prefix">mode_edit</i>
                                              <textarea id="icon_prefix2" name="fappointment_jobtitle" class="materialize-textarea"></textarea>
                                              <label for="icon_prefix2">Job Title</label>
                                          </div>
                                          <div class="input-field col s12">
                                              <i class="material-icons prefix">mode_edit</i>
                                              <select name="fappointment_salarylevel">
                                                  <option value="" disabled selected>Choose your option</option>
                                                  <option value="1">Countis</option>
                                                  <option value="2">Conauss</option>
                                              </select>
                                              <label for="icon_telephone">Salary Level</label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-content">
                                        <span class="card-title">Current Appointment</span>
                                        <div class="row">

                                          <div class="input-field col s12">
                                              <i class="material-icons prefix">mode_edit</i>
                                              <textarea id="icon_prefix2" name="cappointment_jobtitle" class="materialize-textarea"></textarea>
                                              <label for="icon_prefix2">Job Title</label>
                                          </div>
                                          <div class="input-field col s12">
                                              <i class="material-icons prefix">mode_edit</i>
                                              <select name="cappointment_salarylevel">
                                                  <option value="" disabled selected>Choose your option</option>
                                                  <option value="1">Countis</option>
                                                  <option value="2">Conauss</option>
                                              </select>
                                              <label for="icon_telephone">Current Salary Level</label>
                                          </div>
                                          <div class="input-field col s12">
                                              <i class="material-icons prefix">today</i>
                                              <label for="currentappointment">Date on Current level</label>
                                              <input id="currentappointment" name="cappointment_dateonlevel" type="text" class="datepicker">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-content">
                                          <span class="card-title"></span>
                                          <div class="row">
                                            <div class="row col s12">
                                                <label>Employment Status</label><br>
                                                <div class="col s12">
                                                    <p class="p-v-xs">
                                                        <input name="employmentstatus" value="permanent" type="radio" id="permanent" />
                                                        <label for="permanent">Permanent</label>
                                                    </p>
                                                    <p class="p-v-xs">
                                                        <input name="employmentstatus" value="temporary" type="radio" id="Temporary" />
                                                        <label for="Temporary">Temporary</label>
                                                    </p>
                                                    <p class="p-v-xs">
                                                        <input class="with-gap" name="employmentstatus" value="contract" type="radio" id="Contract"  />
                                                        <label for="Contract">Contract</label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row col s12">
                                                <label>Health Status</label><br>
                                                <div class="col s12">
                                                    <p class="p-v-xs">
                                                        <input name="healthstatus" value="normal" type="radio" id="normal" />
                                                        <label for="normal">normal</label>
                                                    </p>
                                                    <p class="p-v-xs">
                                                        <input name="healthstatus" value="disabled" type="radio" id="disabled" />
                                                        <label for="disabled">Disabled</label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row col s12">
                                                <label>Accommodation</label><br>
                                                <div class="col s12">
                                                    <p class="p-v-xs">
                                                        <input name="accomodationstatus" value="uniowned" type="radio" id="Uniowned" />
                                                        <label for="Uniowned">University Owned</label>
                                                    </p>
                                                    <p class="p-v-xs">
                                                        <input name="accomodationstatus" value="unirented" type="radio" id="unirented" />
                                                        <label for="unirented">University Rented</label>
                                                    </p>
                                                    <p class="p-v-xs">
                                                        <input class="with-gap" name="accomodationstatus" value="personal" type="radio" id="personal"  />
                                                        <label for="personal">Personally owned or Rented</label>
                                                    </p>
                                                </div>
                                                <div class="col s12 right-align m-t-sm">

                                                    <button type="submit" class="btn waves-effect waves-light teal">Update</button>

                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                </form>

                              </div>
                            </div>

@stop

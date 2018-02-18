<?php



Route::get('/', function(){
  return redirect('/dashboard');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/adminr','SessionsController@create');
    Route::get('/admin','SessionsController@signin');

    Route::get('/hr', 'HrController@index')->name('hrhome');

    Route::post('/notification','HrController@add');
    Route::get('/notification/show/{id}','HrController@show');
    Route::get('/notification/delete/{id}','HrController@delete');

    Route::get('/sapplications', 'ApplicationController@sindex')->name('sapplications');
    Route::get('/applications', 'ApplicationController@index')->name('applications');
    Route::get('/application/{id}','ApplicationController@show')->name('applicationshow');
    Route::get('/application/approve/{id}','ApplicationController@approve')->name('approveapplication');
    Route::get('/application/happrove/{id}','ApplicationController@happrove')->name('happroveapplication');
    Route::get('/application/dapprove/{id}','ApplicationController@dapprove')->name('dapproveapplication');
    Route::get('/application/reject/{id}','ApplicationController@reject')->name('rejectapplication');
    Route::get('/application/hreject/{id}','ApplicationController@hreject')->name('rejectapplication');
    Route::get('/application/dreject/{id}','ApplicationController@dreject')->name('rejectapplication');
    Route::get('/application/delete/{id}','ApplicationController@delete')->name('deleteapplication');
    Route::get('/addcategories','ApplicationController@addcategory')->name('addcategory');
    Route::post('/savecategory','ApplicationController@savecategory')->name('savecategory');
    Route::patch('/applicationreview/{id}','ApplicationController@applicationreview')->name('applicationreview');
    Route::patch('/updatereview/{id}','ApplicationController@updatereview')->name('updatereview');

    Route::get('/squeries', 'QueryController@sindex')->name('squeries');
    Route::get('/queries', 'QueryController@index')->name('queries');
    Route::get('/squery/{id}','QueryController@sshow')->name('squeryshow');
    Route::get('/query/{id}','QueryController@show')->name('queryshow');
    Route::get('/respond/{id}','QueryController@respond')->name('respond');
    Route::post('/respond/{id}','QueryController@saveresponse')->name('saveresponse');
    Route::get('/query/delete/{id}','QueryController@delete')->name('deletequery');
    Route::get('/hpass/{id}','QueryController@hpass')->name('hpass');
    Route::get('/dpass/{id}','QueryController@dpass')->name('dpass');
    Route::get('/drop/{id}','QueryController@drop')->name('drop');
    Route::get('/sanction/{staff_id}','QueryController@sanction')->name('sanction');

    Route::get('/ssanctions', 'SanctionController@sindex')->name('ssanctions');
    Route::get('/sanctions', 'SanctionController@index')->name('sanctions');
    Route::get('/sanctionshow/{id}','SanctionController@show')->name('sanctionshow');
    Route::post('/sanction','QueryController@savesanction')->name('sanctionsave');


    Route::get('/srecommendations', 'RecommendationController@sindex')->name('srecommendations');
    Route::get('/recommendations', 'RecommendationController@index')->name('recommendations');
    Route::get('/recommendation/{id}','RecommendationController@show')->name('recommendationshow');
    Route::get('/recommendation/delete/{id}','RecommendationController@delete')->name('deleterecommendation');


    Route::get('/staff', 'StaffController@index')->name('staff');
    Route::get('/staffprofile/{user}', 'StaffController@show')->name('staffprofile');
    Route::patch('/updateprofile/{user}', 'StaffController@update')->name('updateprofile');
    Route::get('/addstaff', 'StaffController@addstaff')->name('addstaff');
    Route::post('/addstaff', 'StaffController@storestaff')->name('storestaff');


    Route::get('/user','UserController@index')->name('user');
    Route::get('/profile/{id}','UserController@profile')->name('profile');
    Route::get('/apply','UserController@apply')->name('apply');
    Route::get('/papply','UserController@papply')->name('papply');
    Route::post('/apply','UserController@saveapplication')->name('sapply');
    Route::get('/serve/query/{id}','UserController@query')->name('query');
    Route::post('/serve/query','UserController@savequery')->name('savequery');
    Route::get('/serve/recommendation/{id}','UserController@recommend')->name('recommend');
    Route::post('/serve/recommendation','UserController@saverecommendation')->name('saverecommendation');

    Route::get('/addcollege','ManagementController@addcollege')->name('addcollege');
    Route::post('/savecollege','ManagementController@savecollege')->name('savecollege');
    Route::get('/addfaculty','ManagementController@addfaculty')->name('addfaculty');
    Route::post('/savefaculty','ManagementController@savefaculty')->name('savefaculty');
    Route::get('/adddepartment','ManagementController@adddepartment')->name('adddepartment');
    Route::post('/savedepartment','ManagementController@savedepartment')->name('savedepartment');

    Route::get('/addchildren/{id}','ManagementController@addchildren')->name('addchildren');
    Route::post('/savechildren','ManagementController@savechildren')->name('savechildren');
    Route::get('/addinstitution/{id}','ManagementController@addinstitution')->name('addinstitution');
    Route::post('/saveinstitution','ManagementController@saveinstitution')->name('saveinstitution');
    Route::get('/addnextofkin/{id}','ManagementController@addnextofkin')->name('addnextofkin');
    Route::post('/savenextofkin','ManagementController@savenextofkin')->name('savenextofkin');
    Route::get('/addpassport/{id}','ManagementController@addpassport')->name('addpassport');
    Route::post('/savepassport','ManagementController@savepassport')->name('savepassport');
    Route::get('/addpreviousemployment/{id}','ManagementController@addpreviousemployment')->name('addpreviousemployment');
    Route::post('/savepreviousemployment','ManagementController@savepreviousemployment')->name('savepreviousemployment');
    Route::get('/addpublication/{id}','ManagementController@addpublication')->name('addpublication');
    Route::post('/savepublication','ManagementController@savepublication')->name('savepublication');
    Route::get('/addpublicservice/{id}','ManagementController@addpublicservice')->name('addpublicservice');
    Route::post('/savepublicservice','ManagementController@savepublicservice')->name('savepublicservice');
    Route::get('/addresearch/{id}','ManagementController@addresearch')->name('addresearch');
    Route::post('/saveresearch','ManagementController@saveresearch')->name('saveresearch');


    Route::get('/dashboard', function(){
      if(auth()->user()->isHr()){
        return redirect('/hr');
      }else{
        return redirect('/user');
      }
    });

    Route::get('/questionnaires','SurveyController@home')->name('questionnaires');





    Route::get('/addpe', function(){
      return view('hr.addpreviousemployment');
    });

    Route::get('/survey/new', 'SurveyController@new_survey')->name('new.survey');
    Route::get('/survey/{survey}', 'SurveyController@detail_survey')->name('detail.survey');
    Route::get('/survey/view/{survey}', 'SurveyController@view_survey')->name('view.survey');
    Route::get('/survey/answers/{survey}', 'SurveyController@view_survey_answers')->name('view.survey.answers');
    Route::get('/survey/{survey}/delete', 'SurveyController@delete_survey')->name('delete.survey');

    Route::get('/survey/{survey}/edit', 'SurveyController@edit')->name('edit.survey');
    Route::patch('/survey/{survey}/update', 'SurveyController@update')->name('update.survey');

    Route::post('/survey/view/{survey}/completed', 'AnswerController@store')->name('complete.survey');
    Route::post('/survey/create', 'SurveyController@create')->name('create.survey');

    // Questions related
    Route::post('/survey/{survey}/questions', 'QuestionController@store')->name('store.question');

    Route::get('/question/{question}/edit', 'QuestionController@edit')->name('edit.question');
    Route::patch('/question/{question}/update', 'QuestionController@update')->name('update.question');

});

Route::auth();

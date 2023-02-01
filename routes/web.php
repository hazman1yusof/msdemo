<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "DashboardController@redirect");

Route::get('/login', 'SessionController@index')->name('login');

Route::post('/login', 'SessionController@login');

Route::get('/signup', 'SessionController@show_signup');

Route::post('/signup', 'SessionController@signup');

Route::get('/logout','SessionController@destroy');

Route::get('/user_maintenance', "UserMaintenanceController@show");
Route::get('/user_maintenance/table', "UserMaintenanceController@table");
Route::post('/user_maintenance/form', "UserMaintenanceController@form");

Route::get('/user_maintenance/{id}', "UserMaintenanceController@chg_password");
Route::post('/user_maintenance/{id}', "UserMaintenanceController@chg_password_save");

Route::get('/pivot', "PivotController@show");

Route::get('/pivot_get', "PivotController@get_json_pivot");

Route::get('/dialysis','DialysisController@index');
Route::get('/dialysis/table','DialysisController@table');
Route::post('/dialysis/form','DialysisController@form');
Route::get('/dialysis_event','DialysisController@dialysis_event');
Route::post('/change_status', "DialysisController@change_status");
Route::post('/save_dialysis', "DialysisController@save_dialysis");
Route::post('/save_dialysis_completed', "DialysisController@save_dialysis_completed");
Route::post('/save_epis_dialysis', "DialysisController@save_epis_dialysis");
Route::get('/get_data_dialysis', "DialysisController@get_data_dialysis");
Route::post('/dialysis_transaction_save', "DialysisController@dialysis_transaction_save");
Route::get('/check_pt_mode', "DialysisController@check_pt_mode");
Route::get('/verifyuser_dialysis', "DialysisController@verifyuser_dialysis");
Route::get('/verifyuser_admin_dialysis', "DialysisController@verifyuser_admin_dialysis");
Route::get('/bloodtest/table', "DialysisController@bloodtesttable");

Route::get('/prescription', "PrescriptionController@index");
Route::get('/prescription/{id}', "PrescriptionController@detail");

//dari msoftweb
Route::get('/preview','PreviewController@preview');
Route::get('/preview/data','PreviewController@previewdata');
Route::get('/localpreview','WebserviceController@localpreview');

Route::get('/previewvideo/{id}','PreviewController@previewvideo');

Route::get('/upload','PreviewController@upload');
Route::post('/upload','PreviewController@form');

Route::get('/emergency','EmergencyController@index');


Route::get('/download/{folder}/{image_path}','PreviewController@download');

//change carousel image to small thumbnail size
Route::get('/thumbnail/{folder}/{image_path}','PreviewController@thumbnail');

//appointment

Route::get('/appointment','AppointmentController@show')->name('appointment');;
Route::get('/appointment/table','AppointmentController@table');
Route::post('/appointment/form','AppointmentController@form');
Route::get('/appointment/getEvent','AppointmentController@getEvent');
Route::post('/appointment/addEvent','AppointmentController@addEvent');
Route::post('/appointment/editEvent','AppointmentController@editEvent');
Route::post('/appointment/delEvent','AppointmentController@delEvent');

//webservice luar
Route::get('/webservice/patmast','WebserviceController@patmast');
Route::get('/webservice/episode','WebserviceController@episode');
Route::get('/webservice/ticket','WebserviceController@ticket');
Route::get('/webservice/login','WebserviceController@login');
Route::get('/webservice/auto_episode','WebserviceController@auto_episode');

//util dr msoftweb
Route::get('/util/get_value_default','defaultController@get_value_default')->name('util_val');
Route::get('/util/get_table_default','defaultController@get_table_default')->name('util_tab');

//pivot
Route::get('/dashboard','eisController@dashboard')->name('dashboard');
Route::get('/store_dashb','WebserviceController@store_dashb');
Route::get('/eis','eisController@show')->name('eis');
Route::get('/reveis','eisController@reveis')->name('reveis');
Route::get('/pivot_get', "eisController@table");

//doctornote
Route::get('/doctornote','DoctornoteController@index');
Route::get('/doctornote/table','DoctornoteController@table')->name('doctornote_route');
Route::post('/doctornote/form','DoctornoteController@form');
Route::post('/doctornote_transaction_save', "DoctornoteController@transaction_save");

//case note
Route::get('/casenote','CasenoteController@index');
Route::get('/casenote/table','CasenoteController@table');
Route::post('/casenote/form','CasenoteController@form');
Route::post('/casenote_transaction_save', "CasenoteController@transaction_save");

//// Dietetic Care Notes page ///
Route::get('/dieteticCareNotes','DieteticCareNotesController@show');
Route::get('/dieteticCareNotes/table','DieteticCareNotesController@table');
Route::post('/dieteticCareNotes/form','DieteticCareNotesController@form');


//// phys Care Notes page ///
Route::get('/phys','physioController@show');
Route::get('/phys/table','physioController@table');
Route::post('/phys/form','physioController@form');

Route::get('/cardiograph','CardiographController@get_graph');
Route::get('/cardiograph/table','CardiographController@table');
Route::post('/cardiograph/form','CardiographController@form');

//// phys Care Notes page ///
Route::get('/nursing','NursingController@show');
Route::get('/nursing/table','NursingController@table');
Route::post('/nursing/form','NursingController@form');


Route::get('/mainlanding','PatmastController@mainlanding');

Route::get('/pat_mast','PatmastController@show');
Route::get('/pat_mast/get_entry','PatmastController@get_entry');
Route::get('/pat_mast/post_entry','PatmastController@post_entry');
Route::post('/pat_mast/post_entry','PatmastController@post_entry');
Route::post('/pat_mast/save_patient','PatmastController@save_patient');
Route::post('/pat_mast/save_episode','PatmastController@save_episode');
Route::post('/pat_mast/save_adm','PatmastController@save_adm');
Route::post('/pat_mast/save_gl','PatmastController@save_gl');
Route::post('/pat_mast/new_occup_form','PatmastController@new_occup_form');
Route::post('/pat_mast/new_title_form','PatmastController@new_title_form');
Route::post('/pat_mast/new_areacode_form','PatmastController@new_areacode_form');
Route::post('/pat_mast/new_relationship_form','PatmastController@new_relationship_form');
Route::post('/pat_mast/auto_save','PatmastController@auto_save');

Route::post('/discharge/form','DischargeController@form');

Route::post('/episode/save_doc','PatmastController@save_doc');
Route::post('/episode/save_bed','PatmastController@save_bed');
Route::post('/episode/save_nok','PatmastController@save_nok');
Route::post('/episode/save_emr','PatmastController@save_emr');
Route::get('/episode/get_episode_by_mrn','PatmastController@get_episode_by_mrn');
Route::get('/get_preepis_data','PatmastController@get_preepis_data');

Route::get('/mykadFP','MycardController@mykadFP');
Route::post('/mykadfp_store','MycardController@mykadfp_store');
Route::get('/get_mykad_local','MycardController@get_mykad_local');
Route::post('/save_mykad_local','MycardController@save_mykad_local');

Route::get('/preregister','PreregisterController@show');
Route::post('/prereg','PreregisterController@prereg');

Route::get('/test','testController@patmast_limit');
// Route::get('/test2','testController@test2');
// Route::get('/test3','testController@test3');

Route::get('/enquiry','enquiryController@show');
Route::get('/enquiry_order','enquiryController@show_order');
Route::get('/enquiry/table','enquiryController@table');

Route::get('/labresult','LabresultController@show');
Route::get('/labresult/table','LabresultController@table');
Route::post('/labresult','LabresultController@form');
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PharmacistsController;
use App\Http\Controllers\HealthAdminsController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\PhrController;
use App\Http\Controllers\PrescriptionsController;
use App\Http\Controllers\RemindersController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\IncidentsController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\MessagesController;










/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('users',[UsersController::Class,'index']);
Route::post('addUser',[UsersController::Class,'addUser']);
Route::post('login',[UsersController::Class,'login']);
Route::post('getRoleCounts',[UsersController::Class,'getRoleCounts']);
Route::post('updateAccess',[UsersController::Class,'updateAccess']);





/*Patient routes*/

Route::post('addpatient',[PatientsController::Class,'store']);
Route::post('fetchallpatients',[PatientsController::Class,'index']);
Route::post('updatePatientProfile',[PatientsController::Class,'updatePatientProfile']);

/*Doctor routes*/

Route::post('adddoctor',[DoctorsController::Class,'store']);
Route::post('fetchalldoctors',[DoctorsController::Class,'index']);
Route::post('updateDoctorProfile',[DoctorsController::Class,'updateDoctorProfile']);


/*Admin routes*/

Route::post('addadmin',[AdminsController::Class,'store']);
Route::post('fetchalladmins',[AdminsController::Class,'index']);
Route::post('updateAdminProfile',[AdminsController::Class,'updateAdminProfile']);



/*Pharmacists routes*/

Route::post('addpharmacist',[PharmacistsController::Class,'store']);
Route::post('updatePharmacistProfile',[PharmacistsController::Class,'updatePharmacistProfile']);
Route::post('fetchallpharmacists',[PharmacistsController::Class,'index']);


/*HealthAdmin routes*/

Route::post('addhealthadmin',[HealthAdminsController::Class,'store']);
Route::post('updateHealthAdminProfile',[HealthAdminsController::Class,'updateHealthAdminProfile']);
Route::post('fetchallhealthadmins',[HealthAdminsController::Class,'index']);




/*Appointment routes*/
Route::post('saveappointment',[AppointmentsController::Class,'store']);
Route::post('fetchAppointmentsForPatient',[AppointmentsController::Class,'fetchAppointmentsForPatient']);
Route::post('deleteById',[AppointmentsController::Class,'deleteById']);
Route::post('fetchAppointmentsForDoctor',[AppointmentsController::Class,'fetchAppointmentsForDoctor']);
Route::post('UpdateScheduleDate',[AppointmentsController::Class,'UpdateScheduleDate']);



/*PHR routes*/

Route::post('updatePhr',[PhrController::Class,'updatePhr']);
Route::post('fetchAllPhr',[PhrController::Class,'index']);

/*Prescription routes*/

Route::post('savePresc',[PrescriptionsController::Class,'savePresc']);
Route::post('fetchPrescriptionsForPatient',[PrescriptionsController::Class,'fetchPrescriptionsForPatient']);

/*Reminders routes*/

Route::post('saveReminder',[RemindersController::Class,'store']);
Route::post('fetchRemindersForPatient',[RemindersController::Class,'fetchRemindersForPatient']);
Route::post('deleteReminder',[RemindersController::Class,'deleteReminder']);

/*Facilitites routes*/
Route::post('addFacility',[FacilitiesController::Class,'store']);
Route::post('getAllFacilities',[FacilitiesController::Class,'index']);
Route::post('deleteFacility',[FacilitiesController::Class,'deleteFacility']);

/*Incidents routes*/
Route::post('addIncident',[IncidentsController::Class,'store']);
Route::post('getAllIncidents',[IncidentsController::Class,'index']);
Route::post('updateAssignee',[IncidentsController::Class,'updateAssignee']);

/*Permissions routes*/
Route::post('fetchallpermissions',[PermissionsController::Class,'index']);

/*Message routes*/
Route::post('send',[MessagesController::Class,'store']);
Route::post('getUserMessages',[MessagesController::Class,'getUserMessages']);





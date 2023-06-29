<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChartController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'AdminController@index');
Route::post('/login', 'AuthController@login');
Route::get('/account-lock','AuthController@acc_lock');
Route::get('/logout', 'AuthController@logout');
Route::post('/unlock', 'AuthController@unlock');
Route::get('/reset-password/{token}', 'AuthController@change_password');
Route::post('/new-password', 'AuthController@new_password');

// chart related routes
Route::get('/pie', 'AdminController@pieChart');


// forms reletaed routes/.

Route::get('/member-capture', 'AdminController@capture');
Route::get('/members-capture', 'AdminController@captures');
Route::post('/save-application', 'ApplicationController@save_application');


Route::get('create-pdf-file', 'AdminController@dompdf');


//claim forms related routes
Route::get('/member-claim', 'AdminController@claimer');
Route::post('/save-applications', 'ApplicationController@save_applications');

//funeral forms related routes
Route::get('/burials', 'AdminController@burials');
Route::post('/funeral-application', 'ApplicationController@funeral_application');

Route::get('/quotation','AdminController@quotation');
Route::post('/','ApplicationController@quotations_app');

//tombstine 
Route::get('/tombstone','AdminController@tombstones');
Route::post('/tombstone-application','ApplicationController@tombstone_application');

Route::get('/tombstone','AdminController@tombstone');
Route::post('/tombstone-application','ApplicationController@tombstone_application');


Route::get('/data-import', 'AdminController@data_import');
Route::post('/data-import', 'ApplicationController@data_imports');

Route::get('/find-member', 'AdminController@find_member');
Route::post('/policy-payments', 'AdminController@policy_payments');
Route::get('/policy-payments', 'AdminController@policy_payments');
Route::get('/group-payments', 'AdminController@group_payments');
Route::get('/other-payments', 'AdminController@other_payments');
Route::get('/member-payments', 'AdminController@member_payments');
Route::get('/debit-orders', 'AdminController@debit_orders');

//card related
Route::get('/ntu', 'AdminController@ntu_card');
Route::get('/active', 'AdminController@active_card');
Route::get('/deceased-card', 'AdminController@deceased_card');
Route::get('/lapsed', 'AdminController@lapsed_card');
Route::get('/on-trial', 'AdminController@on_trial');
Route::get('/cancelled', 'AdminController@deleted');
Route::get('/notdefined', 'AdminController@not_defined');

Route::get('/getproducttype','AdminController@get_producttype');


Route::post('caldate','AdminController@caldate');

//delete route related
Route::get('delete/{tbl_id}','AdminController@delete');
Route::get('/edit/{tbl_id}','AdminController@edit');
Route::get('delete/{policydtl_id}','ApplicationController@delete');
Route::get('delete-quotation/{quotation_id}','AdminController@delete_quotation');
Route::get('delete/{tomb_id}','ApplicationController@delete_tomb');
Route::get('delete-logg/{claimant_id}','ApplicationController@delete_logg');
Route::get('delete-update/{tbl_id}','ApplicationController@delete_update');

Route::get('delete-info/{deceased_id}','ApplicationController@delete_deceased');
Route::get('delete-physical/{deceased_id}','ApplicationController@delete_physical');
Route::get('delete-burial/{deceased_id}','ApplicationController@delete_burial');
Route::get('delete-tomb/{tomb_id}','ApplicationController@delete_tomb');
Route::get('delete-tombinfo/{tomb_id}','ApplicationController@delete_tombinfo');


//delete route for member update related
Route::get('delete-member/{policydtl_id}','ApplicationController@delette');
Route::get('delete-ben/{ben_id}','ApplicationController@ben_delete');
//edit route related
Route::post('/update-member/{tbl_id}', 'AdminController@update_members');



//clains routes

Route::get('/claims-logged', 'AdminController@claims_logged');
Route::post('/claims-logged', 'AdminController@claims_logged');


Route::get('/claims-details', 'AdminController@claims_details');
// Route::post('/claims-details', 'AdminController@claims_details');

Route::get('/claimant-details', 'AdminController@claimant_details');
// Route::get('/claimant-details', 'AdminController@claimant_details');

Route::get('/deceased-details', 'AdminController@deceased_details');
// Route::post('/deceased-details', 'AdminController@deceased_details');

Route::get('/reports', 'AdminController@reports');
Route::get('/search', 'AdminController@search');

//reports routes
Route::get('/reports-admin','ReportsController@reports_admin');
Route::get('/reports-agents-commission','ReportsController@reports_agents_commission');
Route::get('/reports-audit-report','ReportsController@reports_audit_report');
Route::get('/reports-business-intelligence','ReportsController@reports_business_intelligence');
Route::get('/reports-claims','ReportsController@reports_claims');
Route::get('/reports-duplicate-report','ReportsController@reports_duplicate_report');

//to be done
Route::get('/reports-finance','ReportsController@reports_finance');
Route::get('/reports-funeral','ReportsController@reports_funeral');
Route::get('/reports-sms','ReportsController@reports_sms');
Route::get('/reports-underwriter','ReportsController@reports_underwriter');


Route::get('/pdfgenerate','PDFController@domppdf');


//burial related routes
Route::get('/deceased-info','AdminController@deceased_info');
Route::get('/physical','AdminController@physical');
Route::get('/burial','AdminController@burial');

Route::get('/deceased-details', 'AdminController@deceased_details');
Route::get('/mem/{id}', 'AdminController@mem');


Route::get('/noble/{id}', 'AdminController@noble');



Route::post('/ajax_form', 'AdminController@ajax_form');









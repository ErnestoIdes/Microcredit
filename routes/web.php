<?php

use App\Http\Controllers\ActiveLoansController;
use App\Http\Controllers\DeniedLoansController;
use App\Http\Controllers\PendingLoansController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\UploadSettlementsFormsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\RolesToPermissions;
use App\Http\Controllers\RolesUsersController;
use App\Http\Controllers\LoanApprovalsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loanapp;
use App\Http\Controllers\RegisteredUsersController;
use App\Http\Controllers\RemindersController;
use App\Http\Controllers\LoanHistoryController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\IncomingPaymentsController;
use App\Http\Controllers\TodaysPaymentsController;
use App\Http\Controllers\MissedPaymentsController;
use App\Http\Controllers\AdminsProfileController;
use App\Http\Controllers\CustomerProfileController;

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
## Call the signature View
Route::get('/signature', function(){
    return view('ClientSignature.create'); 
})->middleware('auth');//->name('signature'); 



##Transaction Histories
Route::get('transaction_histories', [loanapp::class, 'transaction_histories'])
                ->middleware('auth')->name('transaction_histories');                


## paymentscheck status route submit by submitting the loan number   
Route::get('checkpayments', [loanapp::class, 'checkpaymentstatus'])
                ->middleware('auth')->name('checkpayments');


## Get all clients and potential clients who subscribed for the email subscription to
## be recieving updates from the System (ADMIN ONLY)
Route::get('/emailsub', [loanapp::class, 'emailsub'])
->middleware('auth', 'permission:can-view-emails')->name("emailsub");


## Retrieve all emails via AJAX 
Route::get('/emails-all', [loanapp::class, 'all_emails'])
->middleware('auth','permission:can-view-emails')
->name('all_emails'); 


## Add Messages and queries which were sent from the Web
Route::post('/add_messages', [loanapp::class, 'add_message'])
->middleware('guest')->name("add_message");

## Read Clients Messages and queries which were sent from the Web (ADMIN ONLY)
Route::get('/messages', [loanapp::class, 'message'])
->middleware('auth','permission:can-view-messages')->name("messages");

## Retrieve all messages via AJAX 
Route::get('/messages-all', [loanapp::class, 'all_messages'])
->middleware('auth','permission:can-view-messages')
->name('all_messages');


                           
## Loan Application
Route::get('application/{id}', [loanapp::class, 'loanapplication'])
->middleware('auth')->name('loanapplication');

                          
## Loan Application submit
Route::post('/web_loan_application/{id}', [loanapp::class, 'web_loan_application'])
->middleware('auth')->name('web_loan_application');


## Settlements Forms Downloads 
Route::get('settlements_forms_downloads', [loanapp::class, 'settlements_forms_downloads'])
->middleware('auth')->name('settlements_forms_downloads');

                      
## Settlements Forms View 
Route::get('settlement_forms', [loanapp::class, 'settlement_forms'])
->middleware('auth')->name('settlement_forms');

                  

## Collections view
Route::get('/collectionsView', function(){
return view("collectionsView");
})->middleware('auth')->name('collectionsView'); 


## Collections Post
Route::post('/collectionsPost', [loanapp::class, 'collectionsPost'])
->middleware('auth')->name("collectionsPost");

                              
## Loan Application
Route::get('application/{id}', [loanapp::class, 'loanapplication'])
->middleware('auth')->name('loanapplication');

                          
## Loan Application submit
Route::post('/loanapplication/{id}', [loanapp::class, 'loanSubmit'])
->middleware('auth')->name('loansubmit');



## Loan Applications Review 
Route::get('review', [loanapp::class, 'review'])
->middleware('auth','permission:cfo')->name('review');



##Loan Applications - Review Verfied Loans 
Route::get('reviewed_loans', [loanapp::class, 'reviewed_loans'])
->middleware('auth','permission:can-approve-loan-applications')->name('reviewed_loans');



## Loan Applications - Approve 
Route::post('approve_or_denie', [loanapp::class, 'approve'])
->middleware('auth','permission:can-approve-loan-applications')->name('approve_or_denie');


    
## Regisered Users - CRUD - 
Route::resource('users', RegisteredUsersController::class)
->middleware('auth','permission:can-view-registered-users');     


## Retrieve all regisitered users via AJAX 
Route::get('/users-all', [RegisteredUsersController::class, 'all_users'])
->middleware('auth','permission:can-view-registered-users')
->name('all_users'); 


## Active Loans
Route::get('active-loans', [ActiveLoansController::class,'index'])
->middleware('auth','permission:can-view-active-loans')     
->name('active_loans');


## Retrieve all active loans via AJAX 
Route::get('/active-all', [ActiveLoansController::class, 'active_loans'])
->middleware('auth','permission:can-view-active-loans')
->name('all_active_loans'); 


## Denied Loans
Route::get('denied-loans', [DeniedLoansController::class,'index'])
->middleware('auth','permission:can-view-denied-loans')     
->name('denied_loans');


## Retrieve all denied loans via AJAX 
Route::get('/denied-all', [DeniedLoansController::class, 'denied_loans'])
->middleware('auth','permission:can-view-denied-loans')
->name('all_denied_loans'); 



## Pending Loans
Route::get('pendng-loans', [PendingLoansController::class,'index'])
->middleware('auth','permission:can-view-pending-loans')     
->name('pending_loans');


## Retrieve all pending loans via AJAX 
Route::get('/pending-all', [PendingLoansController::class, 'pending_loans'])
->middleware('auth','permission:can-view-pending-loans')
->name('all_pending_loans'); 


## Update Payments - CRUD - 
Route::resource('payments', PaymentsController::class)
->middleware('auth','permission:can-make-payments-update');  


## Update Settlements
Route::resource('settlements', UploadSettlementsFormsController::class)
->middleware('auth','permission:can-upload-settlements-forms');  

## Roles
Route::resource('roles', RolesController::class)
->middleware('auth','permission:can-add-roles');  


## Assign Permissions To Roles
Route::resource('roles_permissions', RolesToPermissions::class)
->middleware('auth','permission:can-give-permissions');  


## Assign Roles To Users
Route::resource('roles_users', RolesUsersController::class)
->middleware('auth','permission:can-give-roles-to-users'); 


## Show View For Revoking Roles From Users - 
Route::get('roles_users_remove', [RolesUsersController::class,'remove'])
->middleware('auth','permission:can-revoke-roles')
->name('roles_users.remove'); 


## Revoke Roles From Users - 
Route::post('roles_users_revoke', [RolesUsersController::class,'revoke'])
->middleware('auth','permission:can-revoke-roles')
->name('roles_users.revoke'); 



## Loan Approvals - DLO
Route::resource('loan_approvals', LoanApprovalsController::class)
->middleware('auth','permission:dlo');  


## Reminders Notification
Route::resource('reminders', RemindersController::class)
->middleware('auth','permission:can-send-text'); 



## Download Compressed Loan Agreement Forms
Route::get('downloading_loan_agreement_forms', [loanapp::class,'downloadZip'])
->middleware('auth','permission:can-view-loan-agreement-forms')
->name('downloading_loan_agreement_forms'); 


## Terms Payroll
Route::get('terms_payroll/{loan_number}', [loanapp::class,'terms_payroll'])
->middleware('auth')
->name('terms_payroll'); 

## Terms Auto
Route::get('terms_auto/{loan_number}', [loanapp::class,'terms_auto'])
->middleware('auth')
->name('terms_auto'); 


## Terms Private
Route::get('terms_private/{loan_number}', [loanapp::class,'terms_private'])
->middleware('auth')
->name('terms_private'); 



## Export
Route::get('/export_borrower', [loanapp::class,'export_borrower'])
->middleware('auth','permission:can-export-borrower')
->name('export_borrower'); 





## Verify Loan Application
Route::post('verify_loan_application', [loanapp::class,'verify_loan_application'])
->middleware('auth')
->name('verify_loan_application'); 


## Loan History
Route::get('loan-history', [LoanHistoryController::class,'index'])
->middleware('auth')     
->name('loan_history');


## Retrieve all loans via AJAX 
Route::get('/all_applied_loans', [LoanHistoryController::class, 'loan_history'])
->middleware('auth')
->name('all_applied_loans'); 



## About Us
Route::get('about_us', function(){
    return view('about_us');
})
->middleware('guest')
->name('about_us'); 


## Contact Us
Route::get('contact', function(){
    return view('contact');
})
->middleware('guest')
->name('contact'); 



## get all permissions for the user, either directly, or from roles, or from both
Route::get('view_all_permissions', [RolesUsersController::class,'show_all_permissions_from_a_user'])
->middleware('auth','permission:can-check-permissions')
->name('view_all_permissions');  


## get all permissions via Ajax
Route::get('get_all_permissions', [RolesUsersController::class,'get_all_permissions_from_a_user'])
->middleware('auth','permission:can-check-permissions')
->name('get_all_permissions');  


## get all incoming payments in 10 days
Route::get('incoming_payments', [IncomingPaymentsController::class,'index'])
->middleware('auth','permission:can-check-incoming-payments')
->name('incoming_payments');  


## get all incoming payments via Ajax
Route::get('all_incoming_payments', [IncomingPaymentsController::class,'incoming_payments'])
->middleware('auth','permission:can-check-incoming-payments')
->name('all_incoming_payments');  




## get todays payments
Route::get('todays_payments', [TodaysPaymentsController::class,'index'])
->middleware('auth','permission:can-check-todays-payments')
->name('todays_payments');  


## get all todays payments via Ajax
Route::get('all_todays_payments', [TodaysPaymentsController::class,'todays_payments'])
->middleware('auth','permission:can-check-todays-payments')
->name('all_todays_payments');  



## get missed payments
Route::get('missed_payments', [MissedPaymentsController::class,'index'])
->middleware('auth','permission:can-check-missed-payments')
->name('missed_payments');  


## get all missed payments via Ajax
Route::get('all_missed_payments', [MissedPaymentsController::class,'missed_payments'])
->middleware('auth','permission:can-check-missed-payments')
->name('all_missed_payments');  


## Admins Profile
Route::get('admins_profile', [AdminsProfileController::class,'index'])
->middleware('auth','permission:can-check-their-profile')
->name('admin_profile');  


## Admin Change Password
Route::get('admin_change_password', [AdminsProfileController::class,'create'])
->middleware('auth','permission:can-change-their-password')
->name('admin_change_password');  



## Admin Store Password
Route::post('admin_store_password', [AdminsProfileController::class,'store'])
->middleware('auth','permission:can-change-their-password')
->name('admin_store_password');  



## Customers Profile
Route::get('customers_profile', [CustomerProfileController::class,'index'])
->middleware('auth')
->name('customer_profile');  


## Customer Change Password
Route::get('customer_change_password', [CustomerProfileController::class,'create'])
->middleware('auth')
->name('customer_change_password');  



## Customer Store Password
Route::post('customer_store_password', [CustomerProfileController::class,'store'])
->middleware('auth')
->name('customer_store_password');  




## If the Called Route is not found call this Route
Route::fallback(function () {
    return view('Whoops!!!! this link does not exist');
});







Route::get('/', function () {
    return view('welcome');
});

## Employees Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

## Admin Dashboard
Route::get('/admindashboard', [AdminDashboardController::class,'dashboard'])
->middleware(['auth','admin'])
->name('admindashboard');


require __DIR__.'/auth.php';

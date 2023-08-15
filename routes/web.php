<?php

use Illuminate\Support\Facades\Route;

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
})->name('index');

Route::get('suppliers', function () {
    return view('suppliers');
})->name('suppliers');

Route::get('product', function () {
    return view('product');
})->name('product');

Route::get('service', function () {
    return view('service');
})->name('service');

Route::get('brands', function () {
    return view('brand');
})->name('brand');

Route::get('approvals', function () {
    return view('approvals');
})->name('approvals');

Route::get('media/blogs', function () {
    return view('media');
})->name('media');

Route::get('pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('about-us', function () {
    return view('about_us');
})->name('about_us');

Route::get('contact-us', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('rfq', function () {
    return view('rfq');
})->name('rfq');

Auth::routes();

Route::get('add-company', function () {
    return view('add_company');
})->name('add_company');

Route::get('admin-dashboard',[App\Http\Controllers\CompanyController::class,'admin_dashboard'])->name('admin-dashboard');

Route::get('user/list',[App\Http\Controllers\CompanyController::class,'userList'])->name('user_list');

Route::get('department',[App\Http\Controllers\CompanyController::class,'departmentForm'])->name('department_form');
Route::get('department/list',[App\Http\Controllers\CompanyController::class,'departmentList'])->name('department_list');
Route::post('department/save',[App\Http\Controllers\CompanyController::class,'departmentSave'])->name('save_department');

Route::get('project',[App\Http\Controllers\CompanyController::class,'projectForm'])->name('project_form');
Route::get('project/list',[App\Http\Controllers\CompanyController::class,'showProjectList'])->name('show_project_list');
Route::get('approved/item/{id}',[App\Http\Controllers\CompanyController::class,'itemApproved'])->name('approved_item');
Route::get('approved/all/item/{id}',[App\Http\Controllers\CompanyController::class,'itemApprovedAll'])->name('all_items_approved');
Route::get('project/{id}',[App\Http\Controllers\CompanyController::class,'showProject'])->name('view_project');

Route::get('rfq/form',[App\Http\Controllers\CompanyController::class,'rfqForm'])->name('rfq_form');
Route::post('rfq/form/save',[App\Http\Controllers\CompanyController::class,'rfqFormSave'])->name('save_rfq');
Route::get('rfq/pending',[App\Http\Controllers\CompanyController::class,'rfqPending'])->name('rfq_pending_list');
Route::get('rfq/approved',[App\Http\Controllers\CompanyController::class,'rfqApproved'])->name('rfq_approved_list');
Route::get('rfq/closed',[App\Http\Controllers\CompanyController::class,'rfqClosed'])->name('rfq_closed_list');
Route::get('view/rfq/approved/{id}',[App\Http\Controllers\CompanyController::class,'viewRfqApproved'])->name('view_approved_item');
Route::get('view/rfq/pending/{id}',[App\Http\Controllers\CompanyController::class,'viewRfqPending'])->name('view_pending_item');
Route::get('view/rfq/closed/{id}',[App\Http\Controllers\CompanyController::class,'viewRfqClosed'])->name('view_closed_item');


Route::post('update_project_detail/{project_detail_id}',[App\Http\Controllers\CompanyController::class,'updateProjectDetails'])->name('updateProjectDetails');
Route::post('add_project_detail',[App\Http\Controllers\CompanyController::class,'addProjectDetails'])->name('addProjectDetails');
Route::post('add_project',[App\Http\Controllers\CompanyController::class,'addProject'])->name('addProject');
Route::post('add_sub_item',[App\Http\Controllers\CompanyController::class,'addSubItem'])->name('addSubItem');
Route::post('update_sub_item/{id}',[App\Http\Controllers\CompanyController::class,'updateSubItem'])->name('updateSubItem');

Route::post('save_company',[App\Http\Controllers\CompanyController::class,'save_company'])->name('save_company');
Route::get('add-team-members',[App\Http\Controllers\CompanyController::class,'add_team_members'])->name('add_team_members');
Route::post('save_company_member',[App\Http\Controllers\CompanyController::class,'save_company_member'])->name('save_company_member');

Route::get('my-company',[App\Http\Controllers\CompanyController::class,'my_company'])->name('my_company');
Route::get('edit-company',[App\Http\Controllers\CompanyController::class,'edit_company'])->name('edit_company');
Route::post('update_company',[App\Http\Controllers\CompanyController::class,'update_company'])->name('update_company');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/invite', [App\Http\Controllers\InvitationController::class, 'showInviteForm'])->name('invite.form');
Route::post('/invite', [App\Http\Controllers\InvitationController::class, 'sendInvite'])->name('invite.send');


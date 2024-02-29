<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
//tracker controllers
use App\Http\Controllers\TrackerController;
use App\Http\Controllers\LawListController;
use App\Http\Controllers\AmountOfFineController;
use App\Http\Controllers\HowToSolveController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OfficerDashboardController;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\CaseFileController;
use App\Http\Controllers\CheckStatusController;
use App\Http\Controllers\CaseDismissController;

use App\Models\RoleRoute;

function getRoleName($routeName)
{
    $routesData = RoleRoute::where('route_name', $routeName)->get();
    $result = [];
    foreach ($routesData as $routeData) {
        array_push($result, $routeData->role_name);
    }
    return $result;
}
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
// ========= Landing page
Route::get('/',[TrackerController::class, 'index'])->name('/');

// ==== Redirect from registration
Route::get('/redirect-page',[TrackerController::class, 'redirect'])->name('redirect.page');

// ============= For citizen view ======
//==== Law List view
Route::get('/law-list',[LawListController::class, 'show'])->name('law-list');

//=== Amount of fine view
Route::get('/amount-of-fine',[AmountOfFineController::class, 'index'])->name('amount-of-fine');

//===== How to solve view
Route::get('/how-to-solve',[HowToSolveController::class, 'index'])->name('how-to-solve');


// ==== Check Status section ===== //
Route::get('/check-status',[CheckStatusController::class, 'index'])->name('check-status');

Route::get('/search',[CheckStatusController::class, 'search'])->name('search');



//======= Officer section ===== ///

// Log in page of officers
Route::get('/login-page',[LoginController::class, 'index'])->name('login-page');
Route::post('/officer-login',[LoginController::class, 'officer'])->name('officer-login');

Route::middleware('is_officer')->group(function (){

    // Dashboard of Officers
    Route::get('/officers-dashboard',[OfficerDashboardController::class, 'index'])->name('officers-dashboard');

    // ==== Case file ====
    Route::get('/add-case',[CaseFileController::class,'index'])->name('add-case');
    Route::post('/new-case', [CaseFileController::class, 'create'])->name('case.new');
    Route::get('/manage-case',[CaseFileController::class, 'manage'])->name('manage-case');
    Route::get('/edit-case/{id}',[CaseFileController::class, 'edit'])->name('edit-case');
    Route::post('/update-case/{id}', [CaseFileController::class, 'update'])->name('case.update');

//== select option for case file ===////
    Route::get('/get-name-by-nid', [CaseFileController::class,'getName'])->name('nid.get-name');
    Route::get('/get-law-by-clause', [CaseFileController::class,'getLaw'])->name('nid.get-law');

    // ===== Case Dismiss Request
    Route::get('/dismiss-form/{id}',[CaseDismissController::class, 'index'])->name('dismiss-form');
    Route::post('/request-dismiss',[CaseDismissController::class,'requestDismiss'])->name('request-dismiss');
    Route::get('/request-list',[CaseDismissController::class, 'requestList'])->name('request-list');
});





//====================================================//
//============= Admin Section =====================//

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth:sanctum', 'verified','is_register']);
Route::middleware([ 'auth:sanctum',  config('jetstream.auth_session'), 'verified','is_admin'])->group(function () {


    Route::get('/role/add', [RoleController::class, 'index'])->name('role.add');
    Route::post('/role/new', [RoleController::class, 'create'])->name('role.new');
    Route::get('/role/manage', [RoleController::class, 'manage'])->name('role.manage');
    Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::post('/role/update/{id}', [RoleController::class, 'update'])->name('role.update');
    Route::get('/role/delete/{id}', [RoleController::class, 'delete'])->name('role.delete');

    Route::get('/user/add', [UserController::class, 'index', ])->name('user.add');
    Route::post('/user/new', [UserController::class, 'create'])->name('user.new');
    Route::get('/user/manage', [UserController::class, 'manage'])->name('user.manage');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');


//===========Citizen section=======
    Route::get('/add-nid',[CitizenController::class, 'index'])->name('add-nid');
    Route::post('/new-nid', [CitizenController::class, 'create'])->name('nid.new');
    Route::get('/manage-nid',[CitizenController::class, 'manage'])->name('manage-nid');
    Route::get('/edit-nid/{id}',[CitizenController::class, 'edit'])->name('edit-nid');
    Route::post('/update-nid/{id}', [CitizenController::class, 'update'])->name('nid.update');
    Route::post('/delete-nid/{id}', [CitizenController::class, 'delete'])->name('nid.delete');

    //======= Area section =====
    Route::get('/add-area',[AreaController::class,'index'])->name('add-area');
    Route::post('/new-area', [AreaController::class, 'create'])->name('area.new');
    Route::get('/manage-area',[AreaController::class, 'manage'])->name('manage-area');
    Route::get('/edit-area/{id}',[AreaController::class, 'edit'])->name('edit-area');
    Route::post('/update-area/{id}', [AreaController::class, 'update'])->name('area.update');
    Route::post('/delete-area/{id}', [AreaController::class, 'delete'])->name('area.delete');


    //==== Officer section ======
    Route::get('/add-officer',[OfficerController::class,'index'])->name('add-officer');
    Route::post('/new-officer', [OfficerController::class, 'create'])->name('officer.new');
    Route::get('/manage-officer',[OfficerController::class, 'manage'])->name('manage-officer');
    Route::get('/edit-officer/{id}',[OfficerController::class, 'edit'])->name('edit-officer');
    Route::post('/update-officer/{id}', [OfficerController::class, 'update'])->name('officer.update');
    Route::post('/delete-officer/{id}', [OfficerController::class, 'delete'])->name('officer.delete');

//======== Law list section ====
    Route::get('/add-law',[LawListController::class,'index'])->name('add-law');
    Route::post('/new-law', [LawListController::class, 'create'])->name('law.new');
    Route::get('/manage-law',[LawListController::class, 'manage'])->name('manage-law');
    Route::get('/edit-law/{id}',[LawListController::class, 'edit'])->name('edit-law');
    Route::post('/update-law/{id}', [LawListController::class, 'update'])->name('law.update');
    Route::post('/delete-law/{id}', [LawListController::class, 'delete'])->name('law.delete');

//======== Dismiss/Delete Case
    Route::get('/dismiss-list',[CaseDismissController::class, 'viewDismissList'])->name('dismiss-list');
    Route::post('/delete-case/{id}', [CaseFileController::class, 'delete'])->name('case.delete');

});

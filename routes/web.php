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
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\CaseFileController;

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

Route::get('/',[
    'uses' => 'App\Http\Controllers\TrackerController@index',
    'as'        => '/'
]);
Route::get('/redirect-page',[
    'uses' => 'App\Http\Controllers\TrackerController@redirect',
    'as'        => 'redirect.page'
]);
Route::get('/law-list',[
    'uses' => 'App\Http\Controllers\LawListController@show',
    'as'        => 'law-list'
]);
Route::get('/check-status',[
    'uses' => 'App\Http\Controllers\CheckStatusController@index',
    'as'        => 'check-status'
]);
Route::get('/amount-of-fine',[
    'uses' => 'App\Http\Controllers\AmountOfFineController@index',
    'as'        => 'amount-of-fine'
]);

Route::get('/how-to-solve',[
    'uses' => 'App\Http\Controllers\HowToSolveController@index',
    'as'        => 'how-to-solve'
]);


//Officer section
Route::get('/login-page',[
    'uses' => 'App\Http\Controllers\LoginController@index',
    'as'        => 'login-page'

]);

Route::post('/officer-login',[
    'uses' => 'App\Http\Controllers\LoginController@officer',
    'as'        => 'officer-login'
]);

Route::get('/officers-dashboard',[
    'uses' => 'App\Http\Controllers\OfficerDashboardController@index',
    'as'        => 'officers-dashboard',
    'middleware' => 'is_officer'
]);

Route::get('/add-case',[CaseFileController::class,'index'])->name('add-case');
Route::post('/new-law', [LawListController::class, 'create'])->name('law.new');
Route::get('/manage-law',[LawListController::class, 'manage'])->name('manage-law');
Route::get('/edit-law/{id}',[LawListController::class, 'edit'])->name('edit-law');
Route::post('/update-law/{id}', [LawListController::class, 'update'])->name('law.update');
Route::post('/delete-law/{id}', [LawListController::class, 'delete'])->name('law.delete');





//Route::get('/', [HomeController::class, 'index']);
Route::get('/post/add', [PostController::class, 'index'])->name('post.add')->middleware('roles');
Route::post('/post/new', [PostController::class, 'create'])->name('post.new');
Route::get('/post/manage', [PostController::class, 'manage'])->name('post.manage');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/post/update/{id}', [PostController::class, 'edit'])->name('post.update');
Route::post('/post/delete/{id}', [PostController::class, 'delete'])->name('post.delete');

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

//========

});

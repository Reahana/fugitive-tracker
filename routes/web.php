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
Route::get('/law-list',[
    'uses' => 'App\Http\Controllers\LawListController@index',
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

Route::get('/officer-login',[
    'uses' => 'App\Http\Controllers\LoginController@index',
    'as'        => 'officer-login'
]);
Route::get('/officers-dashboard',[
    'uses' => 'App\Http\Controllers\OfficerDashboardController@index',
    'as'        => 'officers-dashboard'
]);



Route::get('/add-officer',[
    'uses' => 'App\Http\Controllers\OfficerController@index',
    'as'        => 'add-officer'
]);

Route::get('manage-officer',[
    'uses' => 'App\Http\Controllers\OfficerController@manage',
    'as'        =>'manage-officer'
]);

Route::get('/edit-officer',[
    'uses' => 'App\Http\Controllers\OfficerController@edit',
    'as'        => 'edit-officer'
]);

//Route::get('/', [HomeController::class, 'index']);
Route::get('/post/add', [PostController::class, 'index'])->name('post.add')->middleware('roles');
Route::post('/post/new', [PostController::class, 'create'])->name('post.new');
Route::get('/post/manage', [PostController::class, 'manage'])->name('post.manage');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/post/update/{id}', [PostController::class, 'edit'])->name('post.update');
Route::post('/post/delete/{id}', [PostController::class, 'delete'])->name('post.delete');


Route::middleware([ 'auth:sanctum',  config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

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







});

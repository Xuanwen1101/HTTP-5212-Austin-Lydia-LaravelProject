<?php

use App\Models\Project;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\UsersController;

use App\Http\Controllers\SchoolsController;
use App\Http\Controllers\ContentsController;
use App\Http\Controllers\WorksController;
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
    return view('welcome', [
        'projects' => Project::all()
    ]);
});

Route::get('/project/{project:slug}', function (Project $project) {
    return view('project', [
        'project' => $project
    ]);
})->where('project', '[A-z\-]+');

Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth');
Route::get('/console/login', [ConsoleController::class, 'loginForm'])->middleware('guest');
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest');
Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth');

Route::get('/console/projects/list', [ProjectsController::class, 'list'])->middleware('auth');
Route::get('/console/projects/add', [ProjectsController::class, 'addForm'])->middleware('auth');
Route::post('/console/projects/add', [ProjectsController::class, 'add'])->middleware('auth');
Route::get('/console/projects/edit/{project:id}', [ProjectsController::class, 'editForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/edit/{project:id}', [ProjectsController::class, 'edit'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/delete/{project:id}', [ProjectsController::class, 'delete'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/image/{project:id}', [ProjectsController::class, 'imageForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/image/{project:id}', [ProjectsController::class, 'image'])->where('project', '[0-9]+')->middleware('auth');

Route::get('/console/users/list', [UsersController::class, 'list'])->middleware('auth');
Route::get('/console/users/add', [UsersController::class, 'addForm'])->middleware('auth');
Route::post('/console/users/add', [UsersController::class, 'add'])->middleware('auth');
Route::get('/console/users/edit/{user:id}', [UsersController::class, 'editForm'])->where('user', '[0-9]+')->middleware('auth');
Route::post('/console/users/edit/{user:id}', [UsersController::class, 'edit'])->where('user', '[0-9]+')->middleware('auth');
Route::get('/console/users/delete/{user:id}', [UsersController::class, 'delete'])->where('user', '[0-9]+')->middleware('auth');

Route::get('/console/types/list', [TypesController::class, 'list'])->middleware('auth');
Route::get('/console/types/add', [TypesController::class, 'addForm'])->middleware('auth');
Route::post('/console/types/add', [TypesController::class, 'add'])->middleware('auth');
Route::get('/console/types/edit/{type:id}', [TypesController::class, 'editForm'])->where('type', '[0-9]+')->middleware('auth');
Route::post('/console/types/edit/{type:id}', [TypesController::class, 'edit'])->where('type', '[0-9]+')->middleware('auth');
Route::get('/console/types/delete/{type:id}', [TypesController::class, 'delete'])->where('type', '[0-9]+')->middleware('auth');

Route::get('/console/contents/list', [ContentsController::class, 'list'])->middleware('auth');
Route::get('/console/contents/add', [ContentsController::class, 'addForm'])->middleware('auth');
Route::post('/console/contents/add', [ContentsController::class, 'add'])->middleware('auth');
Route::get('/console/contents/edit/{content:id}', [ContentsController::class, 'editForm'])->where('content', '[0-9]+')->middleware('auth');
Route::post('/console/contents/edit/{content:id}', [ContentsController::class, 'edit'])->where('content', '[0-9]+')->middleware('auth');
Route::get('/console/contents/delete/{content:id}', [ContentsController::class, 'delete'])->where('content', '[0-9]+')->middleware('auth');
Route::get('/console/contents/image/{content:id}', [ContentsController::class, 'imageForm'])->where('content', '[0-9]+')->middleware('auth');
Route::post('/console/contents/image/{content:id}', [ContentsController::class, 'image'])->where('content', '[0-9]+')->middleware('auth');

Route::get('/console/schools/list', [SchoolsController::class, 'list'])->middleware('auth');
Route::get('/console/schools/add', [SchoolsController::class, 'addForm'])->middleware('auth');
Route::post('/console/schools/add', [SchoolsController::class, 'add'])->middleware('auth');
Route::get('/console/schools/edit/{school:id}', [SchoolsController::class, 'editForm'])->where('school', '[0-9]+')->middleware('auth');
Route::post('/console/schools/edit/{school:id}', [SchoolsController::class, 'edit'])->where('school', '[0-9]+')->middleware('auth');
Route::get('/console/schools/delete/{school:id}', [SchoolsController::class, 'delete'])->where('school', '[0-9]+')->middleware('auth');
Route::get('/console/schools/image/{school:id}', [SchoolsController::class, 'imageForm'])->where('school', '[0-9]+')->middleware('auth');
Route::post('/console/schools/image/{school:id}', [SchoolsController::class, 'image'])->where('school', '[0-9]+')->middleware('auth');

Route::get('/console/works/list', [WorksController::class, 'list'])->middleware('auth');
Route::get('/console/works/add', [WorksController::class, 'addForm'])->middleware('auth');
Route::post('/console/works/add', [WorksController::class, 'add'])->middleware('auth');
Route::get('/console/works/edit/{work:id}', [WorksController::class, 'editForm'])->where('work', '[0-9]+')->middleware('auth');
Route::post('/console/works/edit/{work:id}', [WorksController::class, 'edit'])->where('work', '[0-9]+')->middleware('auth');
Route::get('/console/works/delete/{work:id}', [WorksController::class, 'delete'])->where('work', '[0-9]+')->middleware('auth');
Route::get('/console/works/image/{work:id}', [WorksController::class, 'imageForm'])->where('work', '[0-9]+')->middleware('auth');
Route::post('/console/works/image/{work:id}', [WorksController::class, 'image'])->where('work', '[0-9]+')->middleware('auth');
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Type;
use App\Models\User;
use App\Models\Project;
use App\Models\Email;
use App\Models\Blog;
use App\Models\Content;
use App\Models\School;
use App\Models\Skill;
use App\Models\Work;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/types', function(){

    $types = Type::orderBy('title')->get();
    return $types;

});

Route::get('/projects', function(){

    $projects = Project::orderBy('created_at')->get();

    foreach($projects as $key => $project)
    {
        $projects[$key]['user'] = User::where('id', $project['user_id'])->first();
        $projects[$key]['type'] = Type::where('id', $project['type_id'])->first();

        if($project['image'])
        {
            $projects[$key]['image'] = env('APP_URL').'storage/'.$project['image'];
        }
    }

    return $projects;

});

Route::get('/projects/profile/{project?}', function(Project $project){

    $project['user'] = User::where('id', $project['user_id'])->first();
    $project['type'] = Type::where('id', $project['type_id'])->first();

    if($project['image'])
    {
        $project['image'] = env('APP_URL').'storage/'.$project['image'];
    }

    return $project;

});

Route::get('/emails', function(){

  $emails = Email::orderBy('created_at')->get();
  return $emails;

});

// dynamic route for email content
Route::get('/emails/{email}', function(Email $email){

  $email['content'] = Content::where('id', $email['id'])->first();
  return $email;

});

Route::get('/blogs', function(){

  $blogs = Blog::orderBy('created_at')->get();
  
  foreach ($blogs as $key => $blog) {
    $blogs[$key]['user'] = User::where('id', $blog['user_id'])->first();
    
    if($blog['image'])
    {
        $blogs[$key]['image'] = env('APP_URL').'storage/'.$blog['image'];
    }
  }

  return $blogs;

});

// dynamic route for blog content
Route::get('/blogs/profile/{blog?}', function(Blog $blog){

  $blog['content'] = Content::where('id', $blog['id'])->first();
  $blog['user'] = User::where('id', $blog['user_id'])->first();

  if($blog['image'])
  {
      $blog['image'] = env('APP_URL').'storage/'.$blog['image'];
  }

  return $blog;

});

Route::get('/schools', function(){

  $schools = School::orderBy('created_at')->get();

  foreach ($schools as $key => $school) {
    
    if($school['image'])
    {
        $schools[$key]['image'] = env('APP_URL').'storage/'.$school['image'];
    }
  }

  return $schools;

});

// dynamic route for school content
Route::get('/schools/{school}', function(School $school){

  $school['content'] = Content::where('id', $school['id'])->first();

  if($school['image'])
  {
      $school['image'] = env('APP_URL').'storage/'.$school['image'];
  }

  return $school;

});

Route::get('/skills', function(){

  $skills = Skill::orderBy('created_at')->get();

  foreach ($skills as $key => $skill) {
    
    if($skill['image'])
    {
        $skills[$key]['image'] = env('APP_URL').'storage/'.$skill['image'];
    }
  }

  return $skills;

});

// dynamic route for skill content
Route::get('/skills/{skill}', function(Skill $skill){

  $skill['content'] = Content::where('id', $skill['id'])->first();

  if($skill['image'])
  {
      $skill['image'] = env('APP_URL').'storage/'.$skill['image'];
  }

  return $skill;

});

Route::get('/works', function(){

  $works = Work::orderBy('created_at')->get();

  foreach ($works as $key => $work) {
    
    if($work['image'])
    {
        $works[$key]['image'] = env('APP_URL').'storage/'.$work['image'];
    }
  }

  return $works;

});

// dynamic route for work content
Route::get('/works/{work}', function(Work $work){

  $work['content'] = Content::where('id', $work['id'])->first();

  if($work['image'])
  {
      $work['image'] = env('APP_URL').'storage/'.$work['image'];
  }

  return $work;

});

Route::get('/extras', function(){

  $extras = Content::orderBy('created_at')->get();

  foreach ($extras as $key => $extra) {
    
    if($extra['image'])
    {
        $extras[$key]['image'] = env('APP_URL').'storage/'.$extra['image'];
    }
  }

  return $extras;

});

// dynamic route for extra content
Route::get('/extras/{extra}', function(Content $extra){

  if($extra['image'])
  {
      $extra['image'] = env('APP_URL').'storage/'.$extra['image'];
  }

  return $extra;

});
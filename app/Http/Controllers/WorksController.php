<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Work;

class WorksController extends Controller
{
    public function list()
    {
        return view('works.list', [
            'works' => Work::all()
        ]);
    }

    public function addForm()
    {
        return view('works.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'employment_type' => 'required',
            'company_name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $work = new Work();
        $work->title = $attributes['title'];
        $work->employment_type = $attributes['employment_type'];
        $work->company_name = $attributes['company_name'];
        $work->location = $attributes['location'];
        $work->description = $attributes['description'];
        $work->start_date = $attributes['start_date'];
        $work->end_date = $attributes['end_date'];
        $work->save();

        return redirect('/console/works/list')
            ->with('message', 'Work has been added!');
    }

    public function editForm(Work $work)
    {
        return view('works.edit', [
            'work' => $work,
        ]);
    }

    public function edit(Work $work)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'employment_type' => 'required',
            'company_name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $work->title = $attributes['title'];
        $work->employment_type = $attributes['employment_type'];
        $work->company_name = $attributes['company_name'];
        $work->location = $attributes['location'];
        $work->description = $attributes['description'];
        $work->start_date = $attributes['start_date'];
        $work->end_date = $attributes['end_date'];
        $work->save();

        return redirect('/console/works/list')
            ->with('message', 'Work has been edited!');
    }

    public function delete(Work $work)
    {
        $work->delete();
        
        return redirect('/console/works/list')
            ->with('message', 'Work has been deleted!');        
    }

    public function imageForm(Work $work)
    {
        return view('works.image', [
            'work' => $work,
        ]);
    }

    public function image(Work $work)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($work->image);
        
        $path = request()->file('image')->store('works');

        $work->image = $path;
        $work->save();
        
        return redirect('/console/works/list')
            ->with('message', 'Work image has been edited!');
    }
}

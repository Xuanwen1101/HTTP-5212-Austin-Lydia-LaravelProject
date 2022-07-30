<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\School;

class SchoolsController extends Controller
{
    public function list()
    {
        return view('schools.list', [
            'schools' => School::all()
        ]);
    }

    public function addForm()
    {
        return view('schools.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'school' => 'required',
            'school_url' => 'nullable|url',
            'major' => 'required',
            'degree' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $school = new School();
        $school->school = $attributes['school'];
        $school->school_url = $attributes['school_url'];
        $school->major = $attributes['major'];
        $school->degree = $attributes['degree'];
        $school->start_date = $attributes['start_date'];
        $school->end_date = $attributes['end_date'];


        $school->save();

        return redirect('/console/schools/list')
            ->with('message', 'School has been added!');
    }

    public function editForm(School $school)
    {
        return view('schools.edit', [
            'school' => $school,
        ]);
    }

    public function edit(School $school)
    {

        $attributes = request()->validate([
            'school' => 'required',
            'school_url' => 'nullable|url',
            'major' => 'required',
            'degree' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $school->school = $attributes['school'];
        $school->school_url = $attributes['school_url'];
        $school->major = $attributes['major'];
        $school->degree = $attributes['degree'];
        $school->start_date = $attributes['start_date'];
        $school->end_date = $attributes['end_date'];
        $school->save();

        return redirect('/console/schools/list')
            ->with('message', 'School has been edited!');
    }

    public function delete(School $school)
    {
        $school->delete();
        
        return redirect('/console/schools/list')
            ->with('message', 'School has been deleted!');        
    }

    public function imageForm(School $school)
    {
        return view('schools.image', [
            'school' => $school,
        ]);
    }

    public function image(School $school)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($school->image);
        
        $path = request()->file('image')->store('schools');

        $school->image = $path;
        $school->save();
        
        return redirect('/console/schools/list')
            ->with('message', 'School image has been edited!');
    }
}

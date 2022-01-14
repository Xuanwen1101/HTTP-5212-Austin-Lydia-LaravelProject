<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function list()
    {
        return view('projects.list', [
            'projects' => Project::all()
        ]);
    }
}

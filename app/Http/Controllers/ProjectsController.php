<?php


namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $ooProjects = Project::all();
        return view('projects.index', [
            'ooProjects' => $ooProjects
        ]);
    }

    public function create()
    {

        return view('projects.create');
    }

    public function edit()
    {

        return view('projects.edit');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        try {
            $project = new Project;
            $project->title = $data['title'];
            $project->content = $data['content'];
            $project->image = $data['image'];
            $project->slug = $data['slug'];
            $project->save();
            return redirect('insert')->with('status', "Insert successfully");
        } catch (Exception $e) {
            return redirect('insert')->with('failed', "operation failed");
        }
    }
}

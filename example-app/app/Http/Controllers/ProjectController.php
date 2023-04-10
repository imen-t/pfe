<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Project;
use App\Models\ProjectUser;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return response()->json($projects);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'project_type' => 'required',

        ]);

        $project = Project::create($request->all());

        // array of users 
        /** 
         * [ {id:1, name:"Ala"} ...]
         */
        if ($request->teams) {
            foreach ($request->teams as $member) {
                ProjectUser::create([
                    'user_id' => $member["id"],
                    'project_id' => $project->id
                ]);
            }
        }

        return response()->json(['message' => 'Project created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return response()->json($project);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return response()->json(['message' => 'Project updated successfully']);
    }
    /**
     * Update the specified resource in storage.
     */
    public function updateBackground(Request $request, Project $project)
    {
        $request->validate([
            'commentaire' => 'required',
            'problem_description' => 'required|string|max:255',
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);

        $project->update($request->all());
        // $file = $request->file('file');
        // $fileName = time() . '_' . $file->getClientOriginalName();
        //  $filePath = $file->storeAs('public/uploads', $fileName);

        // File::create([
        //     "name" => $file->getClientOriginalName(),
        //     "path" =>  $filePath,
        //     "project_id" => $project->id
        // ]);
        return response()->json($project);
    }
    /**
     * Update the specified resource in storage.
     */
    public function updateAnalysis(Request $request, Project $project)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);

        $project->update($request->all());
        // $file = $request->file('file');
        // $fileName = time() . '_' . $file->getClientOriginalName();
        //  $filePath = $file->storeAs('public/uploads', $fileName);

        // File::create([
        //     "name" => $file->getClientOriginalName(),
        //     "path" =>  $filePath,
        //     "project_id" => $project->id
        // ]);
        return response()->json($project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        $project->users();

        return response()->json(['message' => 'Project deletted successfully']);
    }
}

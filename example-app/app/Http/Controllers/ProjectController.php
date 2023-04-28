<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Project;
use App\Models\ProjectUser;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\ProjectMemberAddedNotification;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        // return response()->json($projects);
        return view('projects.history', compact('projects'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
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
        // dd($project );
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

        // return response()->json(['message' => 'Project created successfully']);
        return redirect()->route('projects.edit', ['project' => $project->id]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function addProjectMember(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'project_id' => 'required',

        ]);

        ProjectUser::create([
            'user_id' => $request->user_id,
            'project_id' => $request->project_id
        ]);
            // Get the project
        $project = Project::find($request->project_id);

        // Send notification to user
        
        $user = User::find($request->user_id);
        $user->notify(new ProjectMemberAddedNotification($project));

        return redirect()->back();
        // // return response()->json(['message' => 'Project created successfully']);
        // return redirect()->route('projects.edit', ['project' => $project->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return response()->json($project);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.templates.a3', compact('project'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function updateInfo(Request $request, Project $project)
    {
        // var_dump($request->location);
        $request->validate([
            'location' => 'required',
        ]);

        $project->update($request->all());
        // return response()->json(['message' => 'Project updated successfully']);
        return redirect()->back();
    }
    /**
     * Update the specified resource in storage.
     */
    public function updateBackground(Request $request, Project $project)
    {
        // dd($project);
        $request->validate([
            'commentaire' => 'required',
            'problem_description' => 'required|string|max:255',
            // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',
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
            'problem_analysis' => 'required',
            'conclusion' => 'required',
            // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',
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

    public function deleteUser(Project $project, User $user)
    {
        // $projectUser = ProjectUser::where(['project_id' => $project->id])->where(['user_id' => $user->id])->first();
        $project->users()->detach($user->id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        $project->users();
        return redirect()->back();
        // return response()->json(['message' => 'Project deletted successfully']);
    }
}

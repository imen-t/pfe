<?php

namespace App\Http\Controllers;

use App\Models\ProjectUser;
use App\Models\Action;
use Illuminate\Http\Request;


class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $actions = Action::all();
        return response()->json($actions);
        // return view('projects.templates.dmaic');
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
            'impact'=> 'required',
            'due_date'=> 'required',
            'startDate'=> 'required',
            'is_complex'=> 'required',

        ]);

        $actions = Action::create($request->all());
        $actions->save();

        // array of users 
        /** 
         * [ {id:1, name:"Ala"} ...]
         */
        if ($request->teams) {
            foreach ($request->teams as $member) {
                ProjectUser::create([
                    'user_id' => $member["id"],
                    'project_id' => $actions->id
                ]);
            }
        }
       return response()->json(['message' => 'dmaic Project created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Action $actions)
    {
        return response()->json($actions);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Action $action)
    {
        return view('projects.templates.dmaic', compact('project'));
        
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Action $actions)
    {
        $actions->update($request->all());
        return response()->json(['message' => 'Project updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Action $actions)
    {
        $actions->delete();
        //$actions->users();
        return response()->json(['message' => 'Actions updated successfully']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\User;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Action::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            // 'impact'=> 'required',
            // 'due_date'=> 'required',
            // 'startDate'=> 'required',
            'is_complex' => 'required',

        ]);

        $action = Action::create($request->all());
        $action->save();
        if ($request->is_complex == 1) {
            //  dd(   $action );
            // return view('projects.dmaic.create');
            // return redirect()->route('dmaicProjects.create', $action->id );
        }
        return redirect()->back();
        // return response()->json(['message' => 'Action created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Action $action)
    {
        return $action;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Action $action)
    {
        $users = User::all();
        return view('actions.edit', compact('action', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Action $action)
    {
        //  dd($action);
        $action->update($request->all());
        return response()->json(['message' => 'action updated successfully']);
    }
    /**
     * updateAction the specified resource in storage.
     */
    public function updateAction(Request $request, Action $action)
    {
        // dd($request->user_id);

        $action->update($request->all());

        return redirect()->route('projects.edit', ['project' => $action->project->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Action $action)
    {
        $action->delete();

        return redirect()->back();
    }
}

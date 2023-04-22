<?php

namespace App\Http\Controllers;

use App\Models\Action;
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
            // 'is_complex'=> 'required',

        ]);

        $action = Action::create($request->all());
        $action->save();

     
       return response()->json(['message' => 'Action created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Action $action)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Action $action)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Action $action)
    {
     dd($action);
        // $action->update($request->all());
        // return response()->json(['message' => 'action updated successfully']);
    }
    /**
     * updateAction the specified resource in storage.
     */
    public function updateAction(Request $request, Action $action)
    {
        
        // $action->update($request->all());
        // return response()->json(['message' => 'action updated successfully']);
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

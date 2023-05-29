<?php

namespace App\Http\Controllers;

use App\Models\result;
use App\Models\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return result::all();
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
            'result_title'=> 'required',
             'Month'=> 'required',
             'type'=> 'required',
            'status_result' => 'required',
        

        ]);

        $result = result::create($request->all());
        $result->save();
       

        return response()->json(['message' => 'result created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(result $result)
    {
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(result $result)
    {
        return view('results.edit',compact('result'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, result $result)
     {
         $result->update($request->all());
         return response()->json(['message' => 'results updated successfully']);
     }
     public function updateresult(Request $request, result $result)
    {
    //     // dd($request->user_id);

         $result->update($request->all());

         return redirect()->route('projects.edit', ['project' => $result->project->id]);
     }

    // /**
    //  * Remove the specified resource from storage.
    //  */
     public function destroy(result $result)
     {
         $result->delete();

         return redirect()->back();
     }
}

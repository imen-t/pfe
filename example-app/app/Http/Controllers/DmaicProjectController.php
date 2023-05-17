<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\dmaicProject;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DmaicProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = dmaicProject::all();


        return view('projects.dmaic.list', compact('projects'));
    }
    public function create($id)
    {
        $action = Action::find($id);
        return view('projects.dmaic.create', compact('action'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'projecttitle' => 'required',
        ]);
        $dmaicProject=dmaicProject::create($request->all());

        // return response()->json(['message' => 'Dmaic Project created successfully']);
        // return redirect()->route('projects.edit', ['project' => $project->id]);

        //  return view('projects.templates.dmaic', compact('dmaicProject'));
        return redirect()->route('dmaicProjects.edit', ['dmaicProject' => $dmaicProject]);

    }
    public function updatedefine1(Request $request, dmaicProject $dmaicProject)

    {
        //dd($dmaicProject);
        $request->validate([
            'identify_the_business_gap' => 'required',
           ]);

        $dmaicProject->update($request->all());
        return response()->json($dmaicProject);
    }

    public function updatedefine2(Request $request, dmaicProject $dmaicProject)
    {
        $request->validate([
            'Establish_preliminary' => 'required',

        ]);

        $dmaicProject->update($request->all());
      
        return response()->json($dmaicProject);
    }
    public function updatedefine3(Request $request, dmaicProject $dmaicProject)
    {
        $request->validate([
            'confirm_improvement_methodology' => 'required',

        ]);

        $dmaicProject->update($request->all());
      
        return response()->json($dmaicProject);
    }
    public function step1()
    {
        $dmaicProject = dmaicProject::first();
        return view('measure.step1', compact('dmaicProject'));
    }

   
    public function postStep1(Request $request,string $id): RedirectResponse
    {
        $validatedData = $request->validate([
            // Add validation rules for step 3 inputs
            'crete_a_value_stream' => 'required',


        ]);

        $dmaicProject = dmaicProject::find($id);
        $input = $request->all();
        $dmaicProject->update($input);
        $option = $request->input('option');

        if ($option === 'block') {
            return redirect()->route('measure.step3',['dmaicProject' => $dmaicProject])->withInput();
        } else {
            return redirect()->route('measure.step2',['dmaicProject' => $dmaicProject])->withInput();
        }
        return redirect()->route('measure.step2', $dmaicProject->id);
     
    }
    public function step2()
    {
        $dmaicProject = dmaicProject::first();
        return view('measure.step2', compact('dmaicProject'));
    }

    public function postStep2(Request $request,string $id): RedirectResponse
    {
        $validatedData = $request->validate([
            // Add validation rules for step 3 inputs
            'create_processflow_diagram' => 'required',

        ]);

        $dmaicProject = dmaicProject::find($id);
        $input = $request->all();
        $dmaicProject->update($input);
        return redirect()->route('measure.step3', $dmaicProject->id);
    }
    public function step3()
    {
        $dmaicProject = dmaicProject::first();
        return view('measure.step3', compact('dmaicProject'));
    }

    public function postStep3(Request $request,string $id): RedirectResponse
    {
        $validatedData = $request->validate([
            // Add validation rules for step 3 inputs
            'analyse_measurememnts_systems' => 'required',
           


        ]);

        $dmaicProject = dmaicProject::find($id);
        $input = $request->all();
        $dmaicProject->update($input);
        return redirect()->route('measure.step1', $dmaicProject->id);
     
    }
    /**
     * Display the specified resource.
     */
    public function show(dmaicProject $dmaicProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dmaicProject $dmaicProject)
    {
        return view('projects.templates.dmaic', compact('dmaicProject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dmaicProject $dmaicProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dmaicProject $dmaicProject)
    {
        //
    }
}

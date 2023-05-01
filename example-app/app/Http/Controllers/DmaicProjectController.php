<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\dmaicProject;
use Illuminate\Http\Request;

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
    public function createStepOne(Request $request)
    {
        $projects = $request->session()->get('projects');

        return view('projects.dmaic.create-step-one', compact('projects'));
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'identify_the_business_gap' => 'required',
            'Document_the_process' => 'required|numeric',
            'colllect_and_transltae' => 'required',
            'scope_the_project' => 'required',

        ]);

        if (empty($request->session()->get('projects'))) {
            $projects = new dmaicProject();
            $projects->fill($validatedData);
            $projects->session()->put('projects', $projects);
        } else {
            $projects = $request->session()->get('projects');
            $projects->fill($validatedData);
            $request->session()->put('projects', $projects);
        }

        return redirect()->route('projects.dmaic.create.step.two');
    }
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $product = $request->session()->get('product');

        return view('products.create-step-two', compact('product'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);

        $product = $request->session()->get('product');
        $product->fill($validatedData);
        $request->session()->put('product', $product);

        return redirect()->route('products.create.step.three');
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

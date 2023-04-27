<?php

namespace App\Http\Controllers;

use App\Models\dmaicProject;
use Illuminate\Http\Request;

class DmaicProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dmaicProjects = dmaicProject::all();
  
        //return response()->json($dmaicProjects);
        return view('projects.templates.dmaic', compact('projects'));


    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $dmaicProjects = $request->session()->get('projects');
  
        return view('projects.create-step-one',compact('projects'));
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
  
        if(empty($request->session()->get('projects'))){
            $dmaicProjects = new dmaicProject();
            $dmaicProjects->fill($validatedData);
            $dmaicProjects->session()->put('projects', $dmaicProjects);
        }else{
            $dmaicProjects = $request->session()->get('projects');
            $dmaicProjects->fill($validatedData);
            $request->session()->put('projects', $dmaicProjects);
        }
  
        return redirect()->route('projects.create.step.two');
    }
 /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $product = $request->session()->get('product');
  
        return view('products.create-step-two',compact('product'));
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
        //
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

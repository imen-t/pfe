<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form3model;

class form3controller extends Controller
{
    public function index()
    {
        $formData = form3model::all();
        return view('form-data.index', compact('formData'));
    }
    public function create()
    {
        return view('form-data.create');
    }
    public function store(Request $request)
    {
        $formData = new form3model;
        $formData->field1 = $request->input('rootCause');
        $formData->field2 = $request->input('action');
        $formData->field3 = $request->input('impact');
        $formData->field3 = $request->input('owner');
        $formData->field3 = $request->input('startDate');
        $formData->field3 = $request->input('dueDate');
        $formData->field3 = $request->input('justDoIt');


        $formData->save();
        return redirect()->route('form-data.index');
    }
    public function show($id)
    {
        $formData = form3model::find($id);
        return view('form-data.show', compact('formData'));
    }
    public function edit($id)
    {
        $formData = form3model::find($id);
        return view('form-data.edit', compact('formData'));
    }
    public function update(Request $request, $id)
    {
        $formData = form3model::find($id);
        $formData->field1 = $request->input('box_id');
        $formData->field2 = $request->input('rootCause');
        $formData->field3 = $request->input('action');
        $formData->field3 = $request->input('impact');
        $formData->field3 = $request->input('owner');
        $formData->field3 = $request->input('startDate');
        $formData->field3 = $request->input('dueDate');
        $formData->field3 = $request->input('dmaic');
        $formData->field3 = $request->input('justDoit');
        $formData->save();
        return redirect()->route('form-data.index');
    }
    public function destroy($id)
    {
        $formData = form3model::find($id);
        $formData->delete();
        return redirect()->route('form-data.index');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;

class form3controller extends Controller
{
    public function index()
    {
        $formData =   Action::all();
        return view('form-data.index', compact('formData'));
    }
    public function create()
    {
        return view('form-data.create');
    }
    public function store(Request $request)
    {
        $formData = new Action;
        $formData->field2 = $request->input('title');
        $formData->field3 = $request->input('impact');
        $formData->field3 = $request->input('user_id');
        $formData->field3 = $request->input('start_date');
        $formData->field3 = $request->input('due_date');
        $formData->field3 = $request->input('is_complex');


        $formData->save();
        return redirect()->route('form-data.index');
    }
    public function show($id)
    {
        $formData = Action::find($id);
        return view('form-data.show', compact('formData'));
    }
    public function edit($id)
    {
        $formData = Action::find($id);
        return view('form-data.edit', compact('formData'));
    }
    public function update(Request $request, $id)
    {
        $formData = Action::find($id);
        $formData->field1 = $request->input('box_id');
        $formData->field3 = $request->input('title');
        $formData->field3 = $request->input('impact');
        $formData->field3 = $request->input('owner');
        $formData->field3 = $request->input('startDate');
        $formData->field3 = $request->input('dueDate');
        $formData->field3 = $request->input('is_complex');
        $formData->save();
        return redirect()->route('form-data.index');
    }
    public function destroy($id)
    {
        $formData = Action::find($id);
        $formData->delete();
        return redirect()->route('form-data.index');
    }

}

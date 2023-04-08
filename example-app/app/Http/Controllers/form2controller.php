<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form2model;

class form2controller extends Controller
{
    public function submitFormData(Request $request)
    {
        $validatedData = $request->validate([
            'box_id' => 'required',
            'rootcauses'=>'required',
        ]);
    
        $formData = new form2model();
        $formData->box_id = $validatedData['box_id'];
        $formData->field1 = $request->input('rootcauses');
  $formData->field2 = $request->input('DD');
  $formData->field3 = $request->input('MM');
  $formData->field3 = $request->input('YYYY');

  if ($request->hasFile('attachment')) {
    $file = $request->file('attachment');
    $fileName = $file->getClientOriginalName();
    $file->move(public_path('attachment'), $fileName);
    $formData->file = $fileName;
  }
  $formData->save();

  return response()->json($formData);
    }}

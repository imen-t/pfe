<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form1model;

class form1Controller extends Controller
{
    public function submitFormData(Request $request)
{
    $validatedData = $request->validate([
        'box_id' => 'required',
        'problem' => 'required|string|max:255',
        'file' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
        // Add validation rules for other form fields here
    ]);

    // Store the file in the public storage directory
    
    $file = $request->file('file');
    $fileName = time() . '_' . $file->getClientOriginalName();
    // move the file to a storage directory
    $filePath = $file->storeAs('public/uploads', $fileName);

    $formData = new form1model();
    $formData->box_id = $validatedData['box_id'];
    $formData->description = $validatedData['problem'];
    $formData->commentaire = ['commentaireBackground'];
    $formData->file_path = $filePath;
    $formData->save();

    $formData = form1model::where('box_id', $validatedData['box_id'])->select('description', 'commentaireBackground', 'file')
                                                                     ->first();

    return response()->json(['message' => 'Form data submitted successfully']);
}
}

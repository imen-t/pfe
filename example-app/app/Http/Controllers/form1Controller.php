<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\File;


class form1Controller extends Controller
{
    public function submitFormData(Request $request)
{
    $validatedData = $request->validate([
        'box_id' => 'required',
        'problem_description' => 'required|string|max:255',
        // Add validation rules for other form fields here
    ]);

    // Store the file in the public storage directory
    
    $file = $request->file('file');
    $fileName = time() . '_' . $file->getClientOriginalName();
    // move the file to a storage directory
    $filePath = $file->storeAs('public/uploads', $fileName);

    $formData = new Project();
    $formData->box_id = $validatedData['box_id'];
    $formData->description = $validatedData['problem_description'];
    $formData->commentaire = ['commentaire'];
    $formData->file_path = $filePath;
    $formData->save();

    $formData = Project::where('box_id', $validatedData['box_id'])->select('description', 'commentaireBackground', 'file')
                                                                     ->first();

    return response()->json(['message' => 'Form data submitted successfully']);
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class formController extends Controller
{
public function store(Request $request)
    {
        // validate form data
        $validatedData = $request->validate([
            'problem' => 'required|string|max:255',
            'attachment' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // upload file (if present)
        if ($request->hasFile('attachment')) {
            $path = $request->file('attachment')->store('attachments');
            $validatedData['attachment'] = $path;
        }

        // save form data to database
        $form = DB::table('a3_forms')->insert([
            'problem' => $validatedData['problem'],
            'commentaireBackground'=>['commentaireBackground'],
            'attachment' => $validatedData['attachment'] ?? null,
        ]);

        return response()->json(['message' => 'Form submitted successfully!']);
    }
}


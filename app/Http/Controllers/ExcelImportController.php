<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;


class ExcelImportController extends Controller
{
    public function index() {
        return view('excel-import');
    }
    //
    public function import(Request $request)
    {
        
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:csv',
        ]);
        // Get the uploaded file
        $file = $request->file('file');

        
        // Process the Excel file
        Excel::import(new \App\Imports\YourImportClass(), $file);
        return redirect()->back()->with('success', 'Excel file imported successfully!');
    }
}

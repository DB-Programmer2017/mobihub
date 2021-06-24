<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductsImport;
use App\Exports\ProductsExport;

class Import_Export_Controller extends Controller
{
    public function fileImportExport()
    {
       return view('file-import');
    }

    public function fileImport(Request $request) 
    {
        Excel::import(new ProductsImport, $request->file('file-csv')->store('temp'));
       // return back();
       return redirect('/admin/product')->with('status', 'Success, The file has been imported');
    }

    public function fileExport() 
    {
        return Excel::download(new ProductsExport, 'Products'.time().'.xlsx');
    }    
}

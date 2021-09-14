<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use Excel;
use App\Imports\EmployeeImport;

class EmployeeController extends Controller
{

    public function exportIntoExcel()
    {
      return Excel::download(new EmployeeExport,'employeelist.xlsx');
    }

    public function exportIntoCSV()
    {
      return Excel::download(new EmployeeExport,'employeelist.csv');
    }

    public function importForm()
    {
      return view('import-form');
    }

    public function import(Request $request)
    {
      Excel::import(new EmployeeImport,$request->file);
      return "Record are imported sucessfully";
      return back();
    }
}

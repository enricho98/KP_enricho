<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use Excel;
use App\Imports\EmployeeImport;

class EmployeeController extends Controller
{
    public function addEmployee()
    {
        $employees=[
          ["name"=>"Alice","email"=>"alice@gmail.com","phone"=>"081257987678","salary"=>"200000","department"=>"Accounting"],  
          ["name"=>"Andrew","email"=>"andrew@gmail.com","phone"=>"081257987678","salary"=>"200000","department"=>"Accounting"],
          ["name"=>"Mike","email"=>"mike@gmail.com","phone"=>"081257987678","salary"=>"200000","department"=>"Accounting"],
          ["name"=>"James","email"=>"james@gmail.com","phone"=>"081257987678","salary"=>"200000","department"=>"Accounting"],
          ["name"=>"Sophie","email"=>"sophie@gmail.com","phone"=>"081257987678","salary"=>"200000","department"=>"Accounting"],

        ];
        Employee::insert($employees);
        return "Records are inserted";
    }

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

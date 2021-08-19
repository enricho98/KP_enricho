<?php

namespace App\Imports;

use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'name' => $row['name'],
            'email' => $row['email'],
            'email_verified_at'=> $row['email_verified_at'],
            'password'=> Hash::make  ($row['password']),
            'two_factor_secret'=> $row['two_factor_secret'],
            'two_factor_recovery_codes'=> $row['two_factor_recovery_codes'],
            'remember_token'=> $row['remember_token'],
            'created_at'=> $row['created_at'],
            'updated_at'=> $row['updated_at'],
           

            
        ]);
    }
}

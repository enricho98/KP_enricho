<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;

    protected $table="users";
    protected $fillable=['name','email','email_verified_at','prodi','password','two_factor_secret','two_factor_recovery_codes','remember_token','created_at','updated_at','profile_photo_path ','message','nim','pekerjaan','telepon','facebook','instagram'];


    public static function getEmployee()
    {
        $records=DB::table('users')->select('id','name','email','email_verified_at','prodi','password','two_factor_secret','two_factor_recovery_codes','remember_token','created_at','updated_at','profile_photo_path','message','NIM','pekerjaan','telepon','facebook','instagram')->get()->toArray();
        return $records;
    }

}

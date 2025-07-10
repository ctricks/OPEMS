<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\SalaryStructure;
use App\Models\User;
use App\Models\RawAttendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RawAttendanceController extends Controller
{
    public function TestAPI(Request $request)
    {
        $user = Auth::guard('sanctum')->user();

        if (!$user) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }

        return response()->json(
                [
                    "msg"=>'Success',
                    "status"=>200        
                ],200
            );
    }
    public function InsertDTR(Request $request)
    {
        $user = Auth::guard('sanctum')->user();

        if (!$user) {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'employee_id' => 'required',
            'select_date' => 'required',
            'month'=>'required',
            'check_in' => 'required|date_format:H:i',
            'check_out' => 'required|date_format:H:i|after:check_in',
            'DataSource' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json(['error' => 'Data Entry is invalid'], 401);
        }
        
try{

        $dtrExists = RawAttendance::where('employee_id',$request->employee_id)
                                    ->where('select_date',$request->select_date)
                                    ->first();

        if($dtrExists == null)
        {
            $dtr = RawAttendance::create([
                'name' => $request->name,
                'employee_id' => $request->employee_id,
                'select_date' => $request->select_date,
                'month' => $request->month,
                'check_in' => $request->check_in,
                'check_out' => $request->check_out,
                'DataSource' => $request->DataSource,
            ]);
        //If insert correctly
        return response()->json(
                [
                    "msg"=>'Inserted Successfully',
                    "status"=>200        
                ],200
            );
        }else
        {
            //if Exists Update the record
            $dtrExists->update(
                [
                    'name' => $request->name,
                    'employee_id' => $request->employee_id,
                    'select_date' => $request->select_date,
                    'month' => $request->month,
                    'check_in' => $request->check_in,
                    'check_out' => $request->check_out,
                    'DataSource' => $request->DataSource,
                ]
            );


            return response()->json(
                [
                    "msg"=>'Updated Successfully',
                    "status"=>200        
                ],200
            );
        }
        }catch(exception $e)
        {
             return response()->json(
                [
                    "msg"=>'Error:'->$e->getMessage(),
                    "status"=>401        
                ],401
            );
        }
    }
}

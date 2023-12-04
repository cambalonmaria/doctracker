<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class ListController extends Controller
{
	 public function editlist($id){
	 	$employees=User::where('id',$id)->first();

        return view('Admin.Employee.update',[
              'employee'=>$employees
        ]);
    }
    public function listemployee(){
        $employees = User::select('*')->get();

        
        return view('Admin.Employee.list',compact('employees'));
    }
     public function deletelist(Request $request){

        $Deletesave=Employee::where('id',$request->id)->first();
     
         $employee = Employee::findOrFail($request->id);

        if ($employee->delete()) {
            return redirect()->back()->with('success', 'Record deleted successfully!');
        } else {
            return redirect()->back()->withErrors('Failed to delete the record.');
        }
    }
     public function updatelist(Request $request){
        $query=User::where('id',$request->id)->update(array(
            'name' => $request->fullname,
            'password' => Hash::make($request->password),
            'position' => $request->position,
            'department' => $request->department,
            'email' => $request->email
        ));
        

        if($query) { 
            return redirect()->back()->withErrors('Updated!');
        }
    }
}


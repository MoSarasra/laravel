<?php

namespace App\Http\Controllers;
use App\Models\employee;
use App\Models\leaveApps;
use App\Models\department;
use App\Models\leaveType;
use Illuminate\Http\Request;

class leaveAppsController extends Controller
{
  
    public function index()
    {
         $la =leaveApps::all();
        // leaveApps::select([
        //     'leave_apps.*',
        //     'departments.name',
        //     'leave_types.name',
        //     'employees.name'
        // ]) ->join('employees', 'employee.Dep_id', '=', 'leaveApps.Dep_id')
        //    ->join('leave_types', 'leave_types.id', '=', 'leave_apps.leave_id')
        //    ->join('employees', 'employees.id', '=', 'leave_apps.emp_id');
        return view('leaveApps.index')->with('leave_apps', $la);
       
        
    }

   
    public function create()
    {
        $departments = department::all();
        $lt = leaveType::all();
        $emp = employee::all();
        return view('leaveApps.create')->with('departments', $departments)
        ->with('leave_types', $lt)
        ->with('employees', $emp);
    }


    public function store(Request $request)
    {
        $input = $request->all();
        leaveApps::create($input);
        return redirect('leaveApps')->with('flash_message', 'app Addedd!');   
    }


    public function show($id)
    {
        $la = leaveApps::find($id);
        return view('leaveApps.show')->with('leave_apps', $la);
    }

 
    public function edit($id)
    {
        $la = leaveApps::find($id);
        return view('leaveApps.edit')->with('leave_apps', $la);
    }


    public function update(Request $request, $id)
    {
        $la = leaveApps ::find($id);
        $input = $request->all();
        $la->update($input);
        return redirect('leaveApps')->with('flash_message', 'leaveApp Updated!');   
    }

    public function destroy($id)
    {
        leaveApps::destroy($id);
        return redirect('leaveApps')->with('flash_message', 'App deleted!');  
    }
}

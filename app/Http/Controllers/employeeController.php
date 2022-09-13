<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{

    public function index()
    {
        $emp = employee::all();
        return view ('employees.index')->with('employees', $emp);
    }


    public function create()
    {
       $departments = department::all();
        return view('employees.create')->with('departments', $departments);
    }

 
    public function store(Request $request)
    {
        $input = $request->all();
        employee::create($input);
        return redirect('employees')->with('flash_message', 'employee Addedd!');   
    }

  
    public function show($id)
    {
        $emp = employee::find($id);
        return view('employees.show')->with('employees', $emp);

    }


    public function edit($id)
    {
        $departments = department::all();
        $emp = employee::find($id);
        return view('employees.edit')->with('employees', $emp)->with('departments', $departments);
    }


    public function update(Request $request, $id)
    {
        $emp = employee ::find($id);
        $input = $request->all();
        $emp->update($input);
        return redirect('employees')->with('flash_message', 'employee Updated!');  
    }


    public function destroy($id)
    {
        employee::destroy($id);
        return redirect('employees')->with('flash_message', 'employee deleted!');  
    }
}

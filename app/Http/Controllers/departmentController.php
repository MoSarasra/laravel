<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;

class departmentController extends Controller
{

    public function index()
    {
        $deps = Department::all();
        return view ('Department.index')->with('departments', $deps);
    }

   
    public function create()
    {
        return view('Department.create');
    }

    public function show($id)
    {
        $dep = Department::find($id);
        return view('Department.show')->with('departments', $dep);
    }
 
    public function store(Request $request)
    {
        $input = $request->all();
        department::create($input);
        return redirect('department')->with('flash_message', 'Department Addedd!');  
    }

 
    public function edit($id)
    {
        $dep = Department::find($id);
        return view('department.edit')->with('departments', $dep);
    }

 
    public function update(Request $request, $id)
    {
        $dep = Department ::find($id);
        $input = $request->all();
        $dep->update($input);
        return redirect('department')->with('flash_message', 'Department Updated!');  
    }

    public function destroy($id)
    {
        Department::destroy($id);
        return redirect('department')->with('flash_message', 'Department deleted!');  
    }
}

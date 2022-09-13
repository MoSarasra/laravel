<?php

namespace App\Http\Controllers;
use App\Models\leaveType;
use Illuminate\Http\Request;

class leaveTypeController extends Controller
{
    public function index()
    {
        $lt = leaveType::all();
        return view ('leaveTypes.index')->with('leave_types', $lt);
    }

   
    public function create()
    {
        return view('leaveTypes.create');
    }

    public function show($id)
    {
        $lt = leaveType::find($id);
        return view('leaveTypes.show')->with('leave_types', $lt);
    }
 
    public function store(Request $request)
    {
        $input = $request->all();
        leaveType::create($input);
        return redirect('leaveType')->with('flash_message', 'leave type Addedd!');  
    }

 
    public function edit($id)
    {
        $lt = leaveType::find($id);
        return view('leaveTypes.edit')->with('leave_types', $lt);
    }

 
    public function update(Request $request, $id)
    {
        $lt = leaveType ::find($id);
        $input = $request->all();
        $lt->update($input);
        return redirect('leaveType')->with('flash_message', 'leave type Updated!');  
    }

    public function destroy($id)
    {
        leaveType::destroy($id);
        return redirect('leaveType')->with('flash_message', 'leave type deleted!');  
    }
}

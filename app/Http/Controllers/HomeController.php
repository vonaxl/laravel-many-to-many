<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Employee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employees=Employee::orderBy('id', 'DESC') -> get();
        // dd($employees);
        return view('home',compact('employees'));
    }

    public function create()
    {
        $tasks=Task::all();
        return view('crud.createEmployee', compact('tasks'));
    }
    public function store(Request $request)
    {
        $data=$request->all();
        // dd($data);
        $employee=Employee::create($data);
        $tasks=Task::find($data['tasks']);
        $employee->tasks()->attach($tasks);
        return redirect() ->route('home');
    }

    public function edit($id)
    {   $tasks=Task::all();
        $employee=Employee::findOrFail($id);
        return view('crud.editEmployee', compact('employee','tasks'));
    }
    public function update(Request $request, $id)
    {
        $data=$request->all();
        // dd($data);
        $employee=Employee::findOrFail($id);
        $tasks=Task::find($data['tasks']);
        $employee->tasks()->attach($tasks);
        $employee->update($data);
        return redirect() -> route('home');
    }


    public function destroy($id)
    {
        $employee=Employee::findOrFail($id);
        $employee->delete();
        return redirect() ->route('home');
    }
    public function removeTask($ide,$idt)
    {
        // dd($ide,$idt);
        $employee=Employee::findOrFail($ide);
        $task=Task::findOrFail($idt);
        $employee->tasks()->detach($task);
        return redirect() ->route('home');
    }
}

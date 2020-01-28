<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Employee;

class GuestController extends Controller
{
    public function index()
    {
        $employees=Employee::orderBy('id', 'DESC') -> get();
        // dd($employees);
        return view('home',compact('employees'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('admin')){
            return view('admin.dashboard');
        }
        elseif(Auth::user()->hasRole('employee')){
            return view('employee.dashboard');
        }
        elseif(Auth::user()->hasRole('teacher')){
            return view('teacher.dashboard');
        }
        elseif(Auth::user()->hasRole('student')){
            return view('student.dashboard');
        }
    }

    public function profile()
    {
        
        if(Auth::user()->hasRole('admin')){
            return view('admin.profile');
        }
        elseif(Auth::user()->hasRole('employee')){
            return view('employee.profile');
        }
        elseif(Auth::user()->hasRole('teacher')){
            return view('teacher.profile');
        }
        elseif(Auth::user()->hasRole('student')){
            return view('student.profile');
        }
        
    }

    public function postcreate()
    {
        
        return view('postcreate');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

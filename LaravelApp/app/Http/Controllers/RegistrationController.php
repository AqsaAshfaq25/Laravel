<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("form");
    }
    
    public function register(Request $request){

        $request->validate([
            'Fname' => 'required|string|max:255',
            'email' => 'required|email|string|max:255|unique:students',
            'Cnumber' => 'required|min:11|string',
            'gender' => 'required',
            'password' => 'required|string|min:8',
            'Cpassword' => 'required|same:password',
        ]);
        $students = new Student();
        $students->Fname = $request->Fname;
        $students->email = $request->email;
        $students->gender = $request->gender;
        $students->contact = $request->Cnumber;
        $students->password = $request->password;
        echo $students->save();
        echo "<pre>";
        print_r($request->all());
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Companies;
use App\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['employees'] = Employees::paginate(2);
        $companies = Companies::all();
        return view('employees.index', $data, compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Companies::all();

        return view('employees.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = [
            'first_name'      => 'required|string|max:100|unique:employees,first_name',
            'last_name'      => 'required|string|max:100|unique:employees,last_name',
            'company'      => 'required|integer',
            'email'     => 'required|email|unique:employees,email',
            'phone'     => 'required|max:13'
        ];

        /* $messages = ['required' => 'The :attribute is required']; */
        $this->validate($request, $inputs);

        $dataEmployee = request()->except('_token');
        Employees::insert($dataEmployee);

        return redirect('employees')->with('Message', 'Employee added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employees::findOrFail($id);
        $companies = Companies::all();
        return view('employees.edit', compact('employee'), compact('companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = [
            'first_name'      => 'required|string|max:100',
            'last_name'      => 'required|string|max:100',
            'company'      => 'required|integer',
            'email'     => 'required|email',
            'phone'     => 'required|max:13'
        ];

        $messages = ['required' => 'The :attribute is required'];
        $this->validate($request, $inputs, $messages);

        $dataEmployee = request()->except(['_token', '_method']);
        Employees::where('id', '=', $id)->update($dataEmployee);

        return redirect('employees')->with('Message', 'Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Employees::destroy($id);

        return redirect('employees')->with('Message', 'Employee deleted');
    }
}

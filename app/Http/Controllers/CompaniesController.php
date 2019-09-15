<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['companies'] = Companies::paginate(2);
        return view('companies.index', $data)->with('Select', 'active');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
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
            'name'      => 'required|string|max:100|unique:companies,name',
            'email'     => 'required|email|unique:companies,email',
            'logo'      => 'required|max:10000|mimes:jpeg,png,jpg|dimensions:min_width=100,min_height=100',
            'website'   => 'required|url|max:100|unique:companies,website'
        ];

        /* $messages = ['required' => 'The :attribute is required']; */
        $this->validate($request, $inputs);

        $dataCompany = request()->except('_token');
        if ($request->hasFile('logo')) {
            $dataCompany['logo'] = $request->file('logo')->store('uploads', 'public');
        }

        Companies::insert($dataCompany);

        Mail::send('emails.message', $dataCompany, function ($message) use ($request){
            $message->subject('Company '.$request->name.' was created');
            $message->to('johanmeci03@gmail.com', 'Johan');
        });

        return redirect('companies')->with('Message', 'Company added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show(Companies $companies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Companies::findOrFail($id);
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = [
            'name'      => 'required|string|max:100',
            'email'     => 'required|email',
            'website'   => 'required|url|max:100|'
        ];

        
        if ($request->hasFile('logo')) {
            $inputs += ['logo'      => 'required|max:10000|mimes:jpeg,png,jpg|dimensions:min_width=100,min_height=100'];
        }
        
        $messages = ['required' => 'The :attribute is required'];
        $this->validate($request, $inputs, $messages);
        
        $dataCompany = request()->except(['_token', '_method']);

        if ($request->hasFile('logo')) {

            $company = Companies::findOrFail($id);
            Storage::delete('public/'.$company->logo);

            $dataCompany['logo'] = $request->file('logo')->store('uploads', 'public');

        }

        Companies::where('id', '=', $id)->update($dataCompany);

        //$company = Companies::findOrFail($id);
        //return view('companies.edit', compact('company'));

        return redirect('companies')->with('Message', 'Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Companies::findOrFail($id);

        if (Storage::delete('public/' . $company->logo)) {
            Companies::destroy($id);
        }

        return redirect('companies')->with('Message', 'Company deleted');
    }
    
}

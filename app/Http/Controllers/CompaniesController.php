<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
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
        $companies = Company::all();
        return view('company.index')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Handle File Upload
        if($request->hasFile('logo')){
            // Get filename with the extension
            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
            // Get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('logo')->getClientOriginalExtension();
            // Filename to store
            // The filename will be unique so that files with the same name don't overlap
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            // Upload image
            // storeAs is going to go to storage/app/public
            $path = $request->file('logo')->storeAs('public/images', $fileNameToStore);
        }else{
            // Set default image
            $fileNameToStore = 'noimage.jpg';
        }

        //Create new company
        $company = new Company();

        $company->name = $request->input('name');
        $company->website = $request->input('website');
        $company->email = $request->input('email');
        $company->logo = $fileNameToStore;

        //SQL execute
        $company->save();

        //Confirm message
        return redirect('/company')->with('success', 'Company Updated');
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
        $company = Company::find($id);
        return view('company.edit')->with('company', $company);
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
        //Handle File Upload
        if($request->hasFile('logo')){
            // Get filename with the extension
            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
            // Get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('logo')->getClientOriginalExtension();
            // Filename to store
            // The filename will be unique so that files with the same name don't overlap
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            // Upload image
            // storeAs is going to go to storage/app/public
            $path = $request->file('logo')->storeAs('public/images', $fileNameToStore);
        }

        //Find company
        $company = Company::find($id);

        $company->name = $request->input('name');
        $company->website = $request->input('website');
        $company->email = $request->input('email');
        if($request->hasFile('logo')){
            $company->logo = $fileNameToStore;
        }
        //SQL execute
        $company->save();

        //Confirm message
        return redirect('/company')->with('success', 'Company Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find company
        $company = Company::find($id);

        //Check if there's an image. Don't delete if noimage is in db
        if($company->logo != 'noimage.jpg'){
            //Delete Image
            Storage::delete('public/images/'.$company->logo);
        }

        //Delete company
        $company->delete();

        //Confirm message
        return redirect('/company')->with('success', 'Company Removed');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $companies = Companie::all();

        return view('companies.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameCompany' => 'required|unique:companies,name|max:255',
            'status' => 'required|in:Inactive,Active',
        ]);

        $company = new Companie();
        $company->name = $request->nameCompany;

        $company->status = $request->status;
        $company->slug = Str::slug($company->name, '-');

        $company->save();

        return redirect(route('companies.index'));


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('companies.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Companie::findOrFail($id);

        return view('companies.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $company = Companie::findOrFail($id);

        if($company->name === $request->nameCompany){
            $request->validate([
                'nameCompany' => 'required|max:255',
                'status' => 'required|in:Inactive,Active',
            ]);
        }else{
            $request->validate([
                'nameCompany' => 'required|unique:companies,name|max:255',
                'status' => 'required|in:Inactive,Active',
            ]);
        }



        
        $company->name = $request->nameCompany;

        $company->status = $request->status;
        $company->slug = Str::slug($company->name, '-');

        $company->save();

        return redirect(route('companies.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Companie::findOrFail($id);

        $company->delete();

        return redirect()->route('companies.index');
    }
}

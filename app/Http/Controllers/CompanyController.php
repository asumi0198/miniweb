<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyStoreRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $companies = Company::latest()->paginate(6);
        return view('company.index', compact('companies'));
    }

    public function create()
    {
        return view('company.create');
    }


    public function store(CompanyStoreRequest $request)
    {
        $company = Company::updateOrCreate($request->validated());
        return redirect(route('company.index'))->with('success', $company->name.' company has been created successfully!');
    }


    public function show(Company $company)
    {
        dd($company);
    }


    public function edit(Company $company)
    {
        //
    }


    public function update(Request $request, Company $company)
    {
        //
    }


    public function destroy(Company $company)
    {
        //
    }
}

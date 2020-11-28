<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::orderBy('id','DESC')->paginate(7);
        return view('administracion.companies.index', compact('companies'));
    }

    public function create()
    {
        return view('administracion.companies.create');
    }

    public function store(Request $request)
    {
        $company = Company::create($request->all());
        return redirect()->route('companies.edit', $company->id);
    }

    public function show($id)
    {
        $company = Company::find($id);
        return view('administracion.companies.show',compact('company'));
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('administracion.companies.edit',compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $company->fill($request->all())->save();
        return redirect()->route('companies.index', $company->id);
    }

    public function destroy($id)
    {
        Company::find($id)->delete();
        return back();
    }
}

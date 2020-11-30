<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\OperatorCreateRequest;
use App\Http\Requests\OperatorUpdateRequest;
use App\User;
use App\Company;

class OperatorController extends Controller
{
    public function index()
    {
        $operators = User::orderBy('id','DESC')->paginate(7);
        return view('administracion.operators.index', compact('operators'));
    }

    public function create()
    {
        $companies = Company::orderBy('name','ASC')->pluck('name','id');
        return view('administracion.operators.create', compact('companies'));
    }

    public function store(OperatorCreateRequest $request)
    {
        $operator = User::create($request->all());
        return redirect()->route('operators.edit', $operator->id);
    }

    public function show($id)
    {
        $operator = User::find($id);
        return view('administracion.operators.show',compact('operator'));
    }

    public function edit($id)
    {
        $operator = User::find($id);
        $companies = Company::orderBy('name','ASC')->pluck('name','id');
        return view('administracion.operators.edit',compact('operator','companies'));
    }

    public function update(OperatorUpdateRequest $request, $id)
    {
        $operator = User::find($id);
        $operator->fill($request->all())->save();
        return redirect()->route('operators.index', $operator->id);
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return back();
    }
}

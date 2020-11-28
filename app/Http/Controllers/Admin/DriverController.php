<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Driver;
use App\Company;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::orderBy('id','DESC')->paginate(7);
        return view('administracion.drivers.index', compact('drivers'));
    }

    public function create()
    {
        $companies = Company::orderBy('name','ASC')->pluck('name','id');
        return view('administracion.drivers.create', compact('companies'));
    }

    public function store(Request $request)
    {
        $driver = Driver::create($request->all());
        return redirect()->route('drivers.edit', $driver->id);
    }

    public function show($id)
    {
        $driver = Driver::find($id);
        return view('administracion.drivers.show',compact('driver'));
    }

    public function edit($id)
    {
        $driver = Driver::find($id);
        $companies = Company::orderBy('name','ASC')->pluck('name','id');
        return view('administracion.drivers.edit',compact('driver','companies'));
    }

    public function update(Request $request, $id)
    {
        $driver = Driver::find($id);
        $driver->fill($request->all())->save();
        return redirect()->route('drivers.index', $driver->id);
    }

    public function destroy($id)
    {
        Driver::find($id)->delete();
        return back();
    }
}

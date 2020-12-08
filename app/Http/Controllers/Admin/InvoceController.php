<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\InvoceCreateRequest;
use App\Http\Requests\InvoceUpdateRequest;
use App\Invoce;
use App\Company;
use App\Client;
use App\Restaurant;
use App\User;
use App\Driver;

class InvoceController extends Controller
{
    public function index()
    {
        $invoces = Invoce::orderBy('id','DESC')->paginate(10);
        return view('administracion.invoces.index', compact('invoces'));
    }

    public function create()
    {
        $restaurant_ids = [];
        $invoces      = Invoce::get();
        $companies    = Company::orderBy('name','ASC')->pluck('name','id');
        $drivers      = Driver::orderBy('name','ASC')->pluck('name','id');
        $users        = User::where('id' ,'!=',1)->orderBy('name','ASC')->pluck('name','id');
        $clients      = Client::orderBy('name','ASC')->pluck('name','id');
        $restaurants  = Restaurant::orderBy('name','ASC')->get();
        
        return view('administracion.invoces.create',
            compact('invoces','companies','drivers','users','clients','restaurants','restaurant_ids'));
    }

    public function store(InvoceCreateRequest $request)
    {
        $invoce = Invoce::create($request->all());
        $invoce->restaurants()->attach($request->get('restaurants'));
        return redirect()->route('invoces.edit', $invoce->id);
    }

    public function edit($id)
    {
        $restaurant_ids = [];
        $invoce      = Invoce::find($id);
        $companies    = Company::orderBy('name','ASC')->pluck('name','id');
        $drivers      = Driver::orderBy('name','ASC')->pluck('name','id');
        $users        = User::where('id' ,'!=',1)->orderBy('name','ASC')->pluck('name','id');
        $clients      = Client::orderBy('name','ASC')->pluck('name','id');
        $restaurants  = Restaurant::orderBy('name','ASC')->get();

        foreach($invoce->restaurants as $invos)
        {
            $restaurant_ids[] = $invos->id;
        }
        return view('administracion.invoces.edit', 
            compact('invoce','companies','drivers','users','clients','restaurants','restaurant_ids'));
    }

    public function update(InvoceUpdateRequest $request, $id)
    {
        $invoce = Invoce::find($id);
        $invoce->fill($request->all())->save();
        $invoce->restaurants()->sync($request->get('restaurants'));
        return redirect()->route('invoces.index', $invoce->id);
    }

    public function destroy($id)
    {
        $invoce = Invoce::find($id)->delete();
        return back();
    }
}

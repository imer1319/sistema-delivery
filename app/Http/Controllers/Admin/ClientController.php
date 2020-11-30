<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ClientCreateRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Client;
use App\Company;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('id','DESC')->paginate(7);
        return view('administracion.clients.index', compact('clients'));
    }

    public function create()
    {
        $companies = Company::orderBy('name','ASC')->pluck('name','id');
        return view('administracion.clients.create', compact('companies'));
    }

    public function store(ClientCreateRequest $request)
    {
        $client = Client::create($request->all());
        return redirect()->route('clients.edit', $client->id);
    }

    public function show($id)
    {
        $client = Client::find($id);
        return view('administracion.clients.show',compact('client'));
    }

    public function edit($id)
    {
        $client = Client::find($id);
        $companies = Company::orderBy('name','ASC')->pluck('name','id');
        return view('administracion.clients.edit',compact('client','companies'));
    }

    public function update(ClientUpdateRequest $request, $id)
    {
        $client = Client::find($id);
        $client->fill($request->all())->save();
        return redirect()->route('clients.index', $client->id);
    }

    public function destroy($id)
    {
        Client::find($id)->delete();
        return back();
    }
}

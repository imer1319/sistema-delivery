<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\OperatorCreateRequest;
use App\Http\Requests\OperatorUpdateRequest;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Company;
use Hash;

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
        return redirect()->route('operators.index');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return back();
    }

    public function password(){
        return View('administracion.operators.partails.password');
    }

    public function updatePassword(Request $request){
        $rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18',
        ];
        
        $messages = [
            'mypassword.required' => 'El campo es requerido',
            'password.required' => 'El campo es requerido',
            'password.confirmed' => 'Los passwords no coinciden',
            'password.min' => 'El mínimo permitido son 6 caracteres',
            'password.max' => 'El máximo permitido son 18 caracteres',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect('operators/password')->withErrors($validator);
        }
        else{
            if (Hash::check($request->mypassword, auth()->user()->password)){
                $user = new User;
                $user->where('name', '=', auth()->user()->name)
                     ->update(['password' => bcrypt($request->password)]);
                return redirect()->route('operators.index')->with('status', 'Password cambiado con éxito');
            }
            else
            {
                return redirect()->route('operators.password')->with('message', 'Credenciales incorrectas');
            }
        }
    }
}

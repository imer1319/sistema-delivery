<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RestaurantCreateRequest;
use App\Http\Requests\RestaurantUpdateRequest;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::orderBy('id','DESC')->paginate(7);
        return view('administracion.restaurants.index', compact('restaurants'));
    }

    public function create()
    {
        return view('administracion.restaurants.create');
    }

    public function store(RestaurantCreateRequest $request)
    {
        $restaurant = Restaurant::create($request->all());
        return redirect()->route('restaurants.edit', $restaurant->id);
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return view('administracion.restaurants.show',compact('restaurant'));
    }

    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        return view('administracion.restaurants.edit',compact('restaurant'));
    }

    public function update(RestaurantUpdateRequest $request, $id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->fill($request->all())->save();
        return redirect()->route('restaurants.index', $restaurant->id);
    }

    public function destroy($id)
    {
        Restaurant::find($id)->delete();
        return back();
    }
}

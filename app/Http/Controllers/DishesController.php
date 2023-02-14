<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class DishesController extends Controller
{
    //
    public function index(){
        return view('dashboard',['dishes' => Dish::all()]);
    }

    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'image' => ['nullable', 'mimes:jpg,jpeg,png', 'max:2048'],
            'description' => 'required',
        ]);

        $dish = new Dish;
        $dish->dish_name = $req->title;
        $dish->description = $req->description;
        $dish->image = 'image';
        $dish->save();
        return redirect('/dashboard');
    }
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return redirect('/dashboard');
    }

    public function editDish(Request $req, Dish $dish)
    {   
        $dish = Dish::find($req->foredit);
        $dish->dish_name=$req->title;
        $dish->description=$req->description;
        $dish->save();
        return redirect('dashboard');
    }
}

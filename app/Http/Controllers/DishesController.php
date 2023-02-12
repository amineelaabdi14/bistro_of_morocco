<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class DishesController extends Controller
{
    //
    public function index(){
        return view('welcome',['dishes' => Dish::all()]);
    }
}

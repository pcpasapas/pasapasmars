<?php

namespace App\Http\Controllers;
use App\Models\CarteMeres;
use Illuminate\Http\Request;

class CarteMeresController extends Controller
{
    public function index()
    {
        return CarteMeres::all();
    }
    public function showId(CarteMeres $id)
    {
        $posts = CarteMeres::find($id);
        // $posts = Alimentations::where('id', $id)->get();
        return response($posts);
    }
}

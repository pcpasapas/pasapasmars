<?php

namespace App\Http\Controllers;
use App\Models\ram;
use Illuminate\Http\Request;

class RamController extends Controller
{
    public function index()
    {
        return ram::all();
    }
    public function showId(ram $id)
    {
        $posts = ram::find($id);
        // $posts = Alimentations::where('id', $id)->get();
        return response($posts);
    }
}

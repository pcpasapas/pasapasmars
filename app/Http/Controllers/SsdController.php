<?php

namespace App\Http\Controllers;
use App\Models\Ssd;
use Illuminate\Http\Request;

class SsdController extends Controller
{
    public function index()
    {
        return Ssd::all();
    }
    public function showId(Ssd $id)
    {
        $posts = Ssd::find($id);
        // $posts = Alimentations::where('id', $id)->get();
        return response($posts);
    }
}

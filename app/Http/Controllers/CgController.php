<?php

namespace App\Http\Controllers;
use App\Models\cg;
use Illuminate\Http\Request;

class CgController extends Controller
{
    public function index()
    {
        return cg::all();
    }
    public function showId(cg $id)
    {
        $posts = cg::find($id);
        // $posts = Alimentations::where('id', $id)->get();
        return response($posts);
    }
}

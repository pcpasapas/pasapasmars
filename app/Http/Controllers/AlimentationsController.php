<?php

namespace App\Http\Controllers;

use App\Models\Alimentations;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAlimentationsRequest;
use App\Http\Requests\UpdateAlimentationsRequest;

class AlimentationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    // //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlimentationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreAlimentationsRequest $request)
    // {
    // //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alimentations  $alimentations
     * @return \Illuminate\Http\Response
     */
    public function show(Alimentations $alimentations)
    {
        $posts = Alimentations::orderBy('created_at', 'desc')->get();
        return response($posts);
    // return response()->json($posts);
    }

    public function showId(Alimentations $id)
    {
        $posts = Alimentations::find($id);
        // $posts = Alimentations::where('id', $id)->get();
        return response($posts);
    }

    public function showGTA(Alimentations $alimentations)
    {
        $posts = Alimentations::where('id', '1')->get();
        return response($posts);
    // return response()->json($posts);
    }



/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\Alimentations  $alimentations
 * @return \Illuminate\Http\Response
 */
// public function edit(Alimentations $alimentations)
// {
// //
// }

/**
 * Update the specified resource in storage.
 *
 * @param  \App\Http\Requests\UpdateAlimentationsRequest  $request
 * @param  \App\Models\Alimentations  $alimentations
 * @return \Illuminate\Http\Response
 */
// public function update(UpdateAlimentationsRequest $request, Alimentations $alimentations)
// {
// //
// }

/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Models\Alimentations  $alimentations
 * @return \Illuminate\Http\Response
 */
// public function destroy(Alimentations $alimentations)
// {
// //
// }
}

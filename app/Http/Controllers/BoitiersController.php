<?php

namespace App\Http\Controllers;

use App\Models\Boitiers;
use App\Http\Requests\StoreBoitiersRequest;
use App\Http\Requests\UpdateBoitiersRequest;

class BoitiersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBoitiersRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreBoitiersRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boitiers  $boitiers
     * @return \Illuminate\Http\Response
     */
    public function show(Boitiers $boitiers)
    {
        $posts = Boitiers::orderBy('created_at', 'desc')->get();
        return response($posts);
    // return response()->json($posts);
    }
    public function showId(Boitiers $id)
    {
        $posts = Boitiers::find($id);
        // $posts = Alimentations::where('id', $id)->get();
        return response($posts);
    }

/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\Boitiers  $boitiers
 * @return \Illuminate\Http\Response
 */
// public function edit(Boitiers $boitiers)
// {
//     //
// }

/**
 * Update the specified resource in storage.
 *
 * @param  \App\Http\Requests\UpdateBoitiersRequest  $request
 * @param  \App\Models\Boitiers  $boitiers
 * @return \Illuminate\Http\Response
 */
// public function update(UpdateBoitiersRequest $request, Boitiers $boitiers)
// {
//     //
// }

/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Models\Boitiers  $boitiers
 * @return \Illuminate\Http\Response
 */
// public function destroy(Boitiers $boitiers)
// {
//     //
// }
}

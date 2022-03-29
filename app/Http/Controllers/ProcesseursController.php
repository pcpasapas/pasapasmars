<?php

namespace App\Http\Controllers;

use App\Models\Processeurs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProcesseursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Processeurs  $processeur
     * @return \Illuminate\Http\Response
     */
    public function show(Processeurs $processeurs)
    {
        $posts = Processeurs::orderBy('created_at', 'desc')->get();
        return response($posts);
    }
    public function showId(Processeurs $id)
    {
        $posts = Processeurs::find($id);
        // $posts = Alimentations::where('id', $id)->get();
        return response($posts);
    }

/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\Processeur  $processeur
 * @return \Illuminate\Http\Response
 */


/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\Processeur  $processeur
 * @return \Illuminate\Http\Response
 */


/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Models\Processeur  $processeur
 * @return \Illuminate\Http\Response
 */


}

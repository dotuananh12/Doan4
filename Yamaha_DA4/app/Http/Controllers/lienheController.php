<?php

namespace App\Http\Controllers;

use App\Models\lienhe;
use Illuminate\Http\Request;

class lienheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lienhe= lienhe::orderBy('id')->get(); 
        return view('admin.lienhe.index',compact('lienhe'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lienhe  $lienhe
     * @return \Illuminate\Http\Response
     */
    public function show(lienhe $lienhe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lienhe  $lienhe
     * @return \Illuminate\Http\Response
     */
    public function edit(lienhe $lienhe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lienhe  $lienhe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lienhe $lienhe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lienhe  $lienhe
     * @return \Illuminate\Http\Response
     */
    public function destroy(lienhe $lienhe)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\packages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function show(packages $packages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function edit(packages $packages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, packages $packages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function destroy(packages $packages)
    {
        //
    }
}

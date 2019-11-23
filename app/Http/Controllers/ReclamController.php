<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReclamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *   @returnIlluminate\Http\Response
     * 
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Illuminate\Http\Response
     */
    public function create()
    {
        return view('reclamations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @paramIlluminate\Http\Request  $request
     * @returnIlluminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @paramint  $id
     * @returnIlluminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @paramint  $id
     * @returnIlluminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @paramIlluminate\Http\Request  $request
     * @paramint  $id
     * @returnIlluminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @paramint  $id
     * @returnIlluminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

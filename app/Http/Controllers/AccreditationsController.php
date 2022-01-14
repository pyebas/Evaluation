<?php

namespace App\Http\Controllers;

use App\Models\Accreditations;
use Illuminate\Http\Request;

class AccreditationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accreditations = Accreditations::where('deleted_at', '=', null)->get(); //->load('agents_fonction.Fonction','Agents_contrat.Contrats',);
        dd($accreditations);
    
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
     * @param  \App\Models\Accreditations  $accreditations
     * @return \Illuminate\Http\Response
     */
    public function show(Accreditations $accreditations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accreditations  $accreditations
     * @return \Illuminate\Http\Response
     */
    public function edit(Accreditations $accreditations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accreditations  $accreditations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accreditations $accreditations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accreditations  $accreditations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accreditations $accreditations)
    {
        //
    }
}

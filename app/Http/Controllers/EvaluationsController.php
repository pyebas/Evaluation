<?php

namespace App\Http\Controllers;

use App\Models\Accreditations;
use App\Models\Evaluations;
use App\Models\Evaluables;
use App\Models\Criteres;
use App\Models\Agents;
use App\Models\Categories;
use App\Models\Contrats;
use App\Models\Fonctions;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class EvaluationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agents = Agents::where('deleted_at', '=', null)->get(); //->load('agents_fonction.Fonction','Agents_contrat.Contrats',);
        //dd($agents);
        return view('index', ['agents' => $agents]);
        //return View::make('agents.index')->with($agents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id){
        $criteres = Criteres::all();
        $agent = Agents::find($id);

        //dd($criteres);
        return view('evaluate', ['data' => $criteres, 'agent' => $agent]);
    }

    /**
     * Show the form for evaluate a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function evaluation(Request $request, $id)
    {
        dd($request->all());

        $evaluable = Evaluables::where('agent_id', $id)->get();
        
        $data_evaluation = [];

        foreach ($request['data'] as $data) {
            $data_evaluation = [
                'evaluable_id' => $evaluable->id,
                'user_id' => 1,
                'critere_id' => $data['critere_id'],
                'value' => $data['value'],
                'critique' => $data['critique']
            ];
        }
       

        // if(App\Models\Evaluations->save($data_evaluation)){
        //     //success flash message with redirection to show evaluation view
        //     Session::flash('message', 'Enregistrement effectué avec succès!');
        //     Session::flash('alert-class', 'alert-success');
        // }else{
        //     //error flash message only
        //     Session::flash('message', 'Enregistrement non effectué !');
        //     Session::flash('alert-class', 'alert-danger');
        // }

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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent = Agents::find($id);

        //$lastEvaluations = Evaluations::where('deleted_at', null)->get()->load('Evaluables.Agents', 'User', 'Criteres');
        //dd($lastEvaluations);
        //return view('show', ['data'=> $agent, 'evaluations'=>$lastEvaluations]);
        return view('show', ['data'=> $agent]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evaluations  $evaluations
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluations $evaluations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evaluations  $evaluations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluations $evaluations)
    {
        //
    }

    public function listes(){
        $fonctions = Fonctions::where('deleted_at', null)->get();
        $contrats = Contrats::where('deleted_at', null)->get();
        $criteres = Criteres::where('deleted_at', null)->get();
        $categories = Categories::where('deleted_at', null)->get();
        // $agents_users = Agents::where('deleted_at', null)->get()->load('user');
        // dd($agents_users);
        // $roles = Accreditations::where('deleted_at', null)->get();
        // $noteurs = [];
        // foreach ($agents_users as $key => $value) {
        //     # code...
        // }
        //dd($noteurs);

        return view('saver', ['fonctions'=> $fonctions,
                              'contrats' => $contrats,
                              'criteres' => $criteres,
                              'categories' => $categories
                              //'noteurs' => $noteurs
                            ]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evaluations  $evaluations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluations $evaluations)
    {
        //
    }
}

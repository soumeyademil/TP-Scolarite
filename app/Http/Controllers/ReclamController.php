<?php

namespace App\Http\Controllers;

use Auth;
use App\Etudiant;
use Illuminate\Http\Request;
use App\Reclamations;
use App\Http\Requests\reclamRequest;
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
        $listreclam = Reclamations::all();
        return view('reclamations.index', ['reclamation' => $listreclam]);
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
        $request ->validate([
            'mod' => 'required',
            'contenu' => 'required',
        ]);

        /*$user = Auth::user();
        $current_id = $user->id;

        $current_etud = Etudiant::where('MatrEtud','=', $current_id)->first();
        $current_gr = $current_etud->Gr;*/
        $current_id = '2';
        $current_gr = 9;
        $reclamation = new Reclamations();
        $reclamation->MatrEtud = $current_id;
        $reclamation->GR = $current_gr;
        $reclamation->CodeMod = $request->mod;
        $reclamation->reclamation = $request->contenu;

        $reclamation->save();

        return 'hello!';
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

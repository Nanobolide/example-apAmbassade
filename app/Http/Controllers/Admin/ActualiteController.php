<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Afficher la liste des ressources
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Afficher le formulaire de creation d'une nouvelle ressource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actualites.create');
    }

    /**
     * Processus d'enregistrement d'une nouvelle ressource
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Afficher les d'étailles d'une ressource spécifique
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Afficher le formulaire de modification d'une resource
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Processus de mise à jour de la resource
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Suppression de la ressource
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

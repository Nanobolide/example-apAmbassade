<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class AmbassadeController extends Controller
{
    public function home()
    {
        $actualites = Actualite::get();
        return view('home',compact('actualites'));
    }

    public function ambassadeur()
    {
        return view('client.Ambassadeur');
    }
    public function equipe()
    {
        return view('client.equipe');
    }
    public function horaire()
    {
        return view('client.horaire');
    }

    //services

    public function carte()
    {
        return view('service.carte_consulaire');
    }
    public function inscrire()
    {
        return view('service.Inscrire');
    }
    public function visa()
    {
        return view('service.visa');
    }
    public function autre()
    {
        return view();
    }

    public function actualite()
    {
        $actualites = Actualite::paginate(3);
        return view('client.actualite',compact('actualites'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function communique()
    {
        return view('client.communiques');
    }

}

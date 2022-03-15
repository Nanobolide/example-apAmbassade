<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActuliteRequest;
use App\Models\Actualite;
use App\Models\Communique;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);

    }
    public function formactualite()
    {
        return view('admin.formactualite');
    }

    public function storeActu(ActuliteRequest $request)
    {
            $filename = time() .'.' .$request->image->extension();
                $image = $request->file('image')->storeAs(
                    'image',  $filename,   'public'
                );
                
            Actualite::create([
                'titre'=>$request->titre,
                'image'=>$image,
                'contenu'=>$request->contenu
                ]);

           return back()->with('message','Actualité ajouter');


    }


    public function actualite()
    {
        $actualites = Actualite::paginate(4);
        return view('admin.actualite',compact('actualites'));

    }


    public function editActu($id)
    {
        $actualites = Actualite::find($id);
        return view('admin.editActualite',compact('actualites'));
    }

    public function updateactualite(Request $request,$id)
    {

        $filename = time() .'.' .$request->image->extension();

        $image = $request->file('image')->storeAs(
            'image',  $filename,   'public'
        );

        $actulites = Actualite::find($id);

        if($request->hasFile('image'))
        {
            $image = $request->file('image')->store('public/actualite');
            $actulites ->titre = $request->titre;
            $actulites->contenu =$request->contenu;
            $actulites ->image = $image;
            $actulites->save();

        }else
        {
            $actulites ->titre = $request->titre;
            $actulites->contenu =$request->contenu;
            $actulites->save();
        }

     
        
        return redirect()->route('actualite')->with('message','Mise a jour');
    }
    
    public function deleteActu($id)
    {
        $actulites = Actualite::find($id);
        $actulites->delete();

        return redirect()->route('actualite')->with('message','Supprimé');
    }


        public function store(Request $request)
        {
            Communique::create([
                'titre'=>$request->titre,
                'contenu'=>$request->contenu
            ]);
            return back()->with('message','Communiqué ajouter');
        }

    public function create()
    {
        return view('admin.formCommunique');
    }
    
    public function communique()
    {
        return view('admin.communique');
    }
}

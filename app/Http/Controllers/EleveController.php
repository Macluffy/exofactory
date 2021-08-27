<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;

class EleveController extends Controller
{
    public function index() {
        $data = Eleve::all();
        return view('pages/Eleves',compact('data'));
    }
    public function create() {

        return view('Eleve/layouts/create');
    }

    public function store(Request $request) {

        request()->validate([
            "nom"=>["required","min:1","max:40"],
            "prenom"=>["required","min:1","max:40"],
            "age"=>["required","min:1","max:40"],
            "etat"=>["required","min:1","max:40"],
        ]);
        $newdata = new Eleve;
        $newdata->nom = $request->nom;
        $newdata->prenom = $request->prenom;
        $newdata->age = $request->age;
        $newdata->etat = $request->etat;
        $newdata->save();
        return redirect()->back();
    }

    public function show(Eleve $id) {
        $data = $id;
        return view('Eleve/layouts/show',compact('data'));
    }

    public function edit(Eleve $id){
        $data = $id;
        return view('Eleve/layouts/edit',compact('data'));

    }

    public function update(Eleve $id, Request $request ) {
        // request()->validate([
        //     "nom"=>["required","min:1","max:40"],
        //     "prenom"=>["required","min:1","max:40"],
        //     "age"=>["required","min:1","max:40"],
        //     "etat"=>["required","min:1","max:40"],
        // ]);
        $data = $id;
        $data->nom = $request->nom;
        $data->prenom = $request->prenom;
        $data->age = $request->age;
        $data->etat = $request->etat;
        $data->save();
        return redirect('/Eleves');
    }

    public function destroy(Eleve $id) {
        $id->delete();
        return redirect('/Eleves');
    }
}

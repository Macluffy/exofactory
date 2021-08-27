<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batiment;

class BatimentController extends Controller
{
    public function index() {
        $data = Batiment::all();
        return view('pages/batiments',compact('data'));
    }
    public function create() {

        return view('batiment/layouts/create');
    }

    public function store(Request $request) {

        request()->validate([
            "nom"=>["required","min:1","max:40"],
            "description"=>["required","min:1","max:100"]
        ]);
        $newdata = new Batiment;
        $newdata->nom = $request->nom;
        $newdata->description = $request->description;
        $newdata->save();
        return redirect()->back();
    }

    public function show(Batiment $id) {
        $data = $id;
        return view('batiment/layouts/show',compact('data'));
    }

    public function edit(Batiment $id){
        $data = $id;
        return view('batiment/layouts/edit',compact('data'));

    }

    public function update(Batiment $id, Request $request ) {
        
        // request()->validate([
        //     "name"=>["required","min:1","max:40"],
        //     "description"=>["required","min:1","max:100"]
        // ]);
        $data = $id;
        $data->nom = $request->nom;
        $data->description = $request->description;
        $data->save();
        return redirect('/Batiments');
    }

    public function destroy(Batiment $id) {
        $id->delete();
        return redirect('/Batiments');
    }
}

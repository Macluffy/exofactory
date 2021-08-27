<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    public function index() {
        $data = Formation::all();
        return view('pages/Formations',compact('data'));
    }
    public function create() {

        return view('Formation/layouts/create');
    }

    public function store(Request $request) {

        request()->validate([
            "nom"=>["required","min:1","max:40"],
            "description"=>["required","min:1","max:100"]
        ]);
        $newdata = new Formation;
        $newdata->nom = $request->nom;
        $newdata->description = $request->description;
        $newdata->save();
        return redirect()->back();
    }

    public function show(Formation $id) {
        $data = $id;
        return view('Formation/layouts/show',compact('data'));
    }

    public function edit(Formation $id){
        $data = $id;
        return view('Formation/layouts/edit',compact('data'));

    }

    public function update(Formation $id, Request $request ) {
        // request()->validate([
        //     "name"=>["required","min:1","max:40"],
        //     "description"=>["required","min:1","max:100"]
        // ]);
        $data = $id;
        $data->nom = $request->nom;
        $data->description = $request->description;
        $data->save();
        return redirect('/Formations');
    }

    public function destroy(Formation $id) {
        $id->delete();
        return redirect('/Formations');
    }
}

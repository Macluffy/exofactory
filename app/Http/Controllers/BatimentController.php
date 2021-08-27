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
        $data = $id;
        $data->nom = $request->nom;
        $data->description = $request->description;
        $data->save();
        return redirect('/home');
    }

    public function destroy(Batiment $id) {
        $id->delete();
        return redirect('/home');
    }
}

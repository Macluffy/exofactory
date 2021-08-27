<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typeformation;

class TypeformationController extends Controller
{
    public function index() {
        $data = Typeformation::all();
        return view('pages/Typeformations',compact('data'));
    }
    public function create() {

        return view('Typeformation/layouts/create');
    }

    public function store(Request $request) {

        request()->validate([
            "nom"=>["required","min:1","max:40"],
        ]);
        $newdata = new Typeformation;
        $newdata->nom = $request->nom;
        $newdata->save();
        return redirect()->back();
    }

    public function show(Typeformation $id) {
        $data = $id;
        return view('Typeformation/layouts/show',compact('data'));
    }

    public function edit(Typeformation $id){
        $data = $id;
        return view('Typeformation/layouts/edit',compact('data'));

    }

    public function update(Typeformation $id, Request $request ) {
        // request()->validate([
        //     "name"=>["required","min:1","max:40"],
        // ]);
        $data = $id;
        $data->nom = $request->nom;
        $data->save();
        return redirect('/Typeformations');
    }

    public function destroy(Typeformation $id) {
        $id->delete();
        return redirect('/Typeformations');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $data = Personne::all();
        return view('welcome', compact('data'));
    }

    public function show($id){
        $dataPersonne = Personne::find($id);
        return view('show', compact('dataPersonne'));
    }

    public function destroy(Personne $id){
        $id->delete();
        return redirect()->route('home');
    }

    public function edit(Personne $id){
        $dataPersonne = $id;
        return view('edit', compact('dataPersonne'));
    }

    public function update (Personne $id, Request $request){
        $dataPersonne = $id;
        $dataPersonne->name = $request->name;
        $dataPersonne->age = $request->age;
        $dataPersonne->phone = $request->phone;
        $dataPersonne->email = $request->email;
        $dataPersonne->save();
        return redirect()->route('show', $dataPersonne->id);
    }

    public function destroyAll (){
        Personne::truncate();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\personnage;
use Illuminate\Http\Request;

class personnageController extends Controller
{
    public static function getAllPersonnage(){
        return personnage::all();
    }

    public static function deletePersonnage(int $id){
        personnage::find($id)->delete();
    }

    public static function getPersonnage(int $id){
        return personnage::find($id);
    }

    public function store(Request $request){
        personnage::create([
            'pseudo' => $request->pseudo,
            'pv' => $request->pv,
            'race_id' => $request->race,
            'armure_id' => $request->armure,
            'classe_id' => $request->classe,
            'specialisation_id' => $request->specialisation,
            'proprietaire' => 'Tom'
        ]);
        return redirect('/');
    }

    public function edit(Request $request){
        personnage::find($request->persoIDToEdit)->update([
            'pseudo' => $request->pseudo,
            'pv' => $request->pv,
            'race_id' => $request->race,
            'armure_id' => $request->armure,
            'classe_id' => $request->classe,
            'specialisation_id' => $request->specialisation
        ]);
        return redirect('/');
    }

    public function delete(Request $request){
        personnage::find($request->persoIDToDelete)->delete();
        return redirect('/');
    }
}

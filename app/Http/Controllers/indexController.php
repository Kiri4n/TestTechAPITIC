<?php

namespace App\Http\Controllers;

use App\Models\race;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){

        return view('index',[
            'listeSpecialisation' => specialisationController::getAllSpecialisation()->toJson(),
            'listClasse' => classeController::getAllClasse(),
            'listArmure' => armureController::getAllMateriaux(),
            'listRace' => raceController::getAllRace(),
            'personnages' => personnageController::getAllPersonnage()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\specialisation;
use Illuminate\Http\Request;

class specialisationController extends Controller
{
    public static function getAllSpecialisation(){
        return specialisation::all();
    }

    public static function getClasseSpecialisation(int $classeID){
        return specialisation::where('classe_id', '=', $classeID)->get();
    }
}

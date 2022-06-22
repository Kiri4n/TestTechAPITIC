<?php

namespace App\Http\Controllers;

use App\Models\race;
use Illuminate\Http\Request;

class raceController extends Controller
{
    public static function getAllRace(){
        return race::all();
    }
}

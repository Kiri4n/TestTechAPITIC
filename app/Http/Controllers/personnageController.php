<?php

namespace App\Http\Controllers;

use App\Models\personnage;
use Illuminate\Http\Request;

class personnageController extends Controller
{
    public static function getAllPersonnage(){
        return personnage::all();
    }
}

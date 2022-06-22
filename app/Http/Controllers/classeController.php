<?php

namespace App\Http\Controllers;

use App\Models\classe;
use Illuminate\Http\Request;

class classeController extends Controller
{
    public static function getAllClasse(){
        return classe::all();
    }
}

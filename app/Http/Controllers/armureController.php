<?php

namespace App\Http\Controllers;

use App\Models\armure;
use Illuminate\Http\Request;

class armureController extends Controller
{
    public static function getAllMateriaux(){
        return armure::all();
    }
}

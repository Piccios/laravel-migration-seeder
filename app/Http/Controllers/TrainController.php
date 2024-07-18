<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class TrainController extends Controller
{

    public function index(){
        //prendo i dati dal database
        $trains = Train::all();
        return view('trains.index', compact('trains'));
    }
    //
}

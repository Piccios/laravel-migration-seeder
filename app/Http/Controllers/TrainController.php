<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class TrainController extends Controller
{

    public function index(){
        $date = '2024-07-20';
        $trains = Train::whereDate('orario_di_partenza', $date)->get();
        //prendo i dati dal database
        $trains = Train::all();
        return view('trains.index', compact('trains'));
    }
    //
}

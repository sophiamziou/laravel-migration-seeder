<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\train as train;

class TrainController extends Controller
{
    public function getTrains()
    {
        $trains = train::all();
        return view('trains', compact('trains'));
    }
}

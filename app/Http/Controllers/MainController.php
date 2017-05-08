<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function getIndex()
    {
        $team= Team::all();

        return view('index')->with('team',$team);
    }
}

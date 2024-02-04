<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    public function index(){
        return view('admin.team.index',[
            'teams' => Team::paginate(10)
        ]);
    }
}

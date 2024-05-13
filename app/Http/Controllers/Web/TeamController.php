<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Request;

class TeamController extends Controller
{
    public function team($id){
        $title = "View Team";
        $view_team = Team::find($id);
        return view('web.team', compact('view_team','title'));
    }
}

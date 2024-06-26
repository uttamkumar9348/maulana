<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MissionVisionController extends Controller
{
    public function missionVision(){
        return view('web.vision_mission');
    }
}

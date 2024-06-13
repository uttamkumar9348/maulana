<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\Controller;
use App\Models\Web\CallToAction;
use App\Models\Web\Testimonial;
use Illuminate\Http\Request;
use App\Models\Web\AboutUs;
use App\Models\Web\Feature;
use App\Models\Web\Slider;
use App\Models\notice;
use App\Models\NoticetypeModel;
use App\Models\Team;
// use App\Models\Web\WebEvent;
use App\Models\Language;
use App\Models\Web\WebEvent;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Sliders
        $data['sliders'] = Slider::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->orderBy('id', 'asc')
                            ->get();

        // Features
        $data['features'] = Feature::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->orderBy('id', 'asc')
                            ->get();
        //Notice
        $notices = notice::orderBy('id', 'desc')->get();

        // About Us
        $data['about'] = AboutUs::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->first();

        //team
        $teams = Team::all();
         // Notice Type

        //Event
        $events = WebEvent::orderBy('id','desc')->get();

        // Call To Action
        $data['callToAction'] = CallToAction::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->first();

        // Testimonials
        $data['testimonials'] = Testimonial::where('language_id', Language::version()->id)
                            ->where('status', '1')
                            ->orderBy('id', 'desc')
                            ->get();


        return view('web.index', $data, compact('notices','teams','events'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function setCookie(Request $request) {
        //
        if(Cookie::get('sidebar') != 'navbar-collapsed'){
            Cookie::queue(Cookie::make('sidebar', 'navbar-collapsed', 60*60*24*365));
        }
        else{
            Cookie::queue(Cookie::make('sidebar', 'navbar-expeded', 60*60*24*365));
        }

        return response()->json(['data'=> Cookie::get('sidebar')]);
    }
}

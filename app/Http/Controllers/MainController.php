<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use App\Models\Quote;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;


class MainController extends Controller
{

    public function home()
    {

        $sliders = Slider::where('isActive', 1)->orderBy('id')->get();
        $products = Product::orderBy('id')->take(3)->get();
        $members = Team::orderBy('id')->take(4)->get();
        $testimonials = Quote::where('isActive', 1)->orderBy('id')->get();
        $testimonials_count = Quote::where([
            ['ip', \Request::ip()]
        ])->count();
        if ($testimonials_count > 0){
            $qoutes = true;
        }else{
            $qoutes = false;
        }
        $projects = Project::orderBy('id')->take(3)->get();
        $servives = Service::orderBy('id')->take(3)->get();
        return view('index', [
            'sliders' => $sliders,
            'products' => $products,
            'members' => $members,
            'testimonials' => $testimonials,
            'projects' => $projects,
            'servives' => $servives,
            'qoutes' => $qoutes
        ]);
    }
}

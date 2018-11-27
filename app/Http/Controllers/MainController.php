<?php

namespace App\Http\Controllers;

use App\Models\careers;
use App\Models\clints;
use App\Models\partners;
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
        $products = Product::orderBy('id')->get();
        $members = Team::orderBy('id')->take(4)->get();

        $projects = Project::orderBy('id')->get();
        $servives = Service::orderBy('id')->get();
        $partners = partners::all();
        $clients = clints::all();

        return view('index', [
            'sliders' => $sliders,
            'products' => $products,
            'members' => $members,
            'projects' => $projects,
            'servives' => $servives,
            'partners' => $partners,
            'clients' => $clients,
        ]);
    }

    public function getContactPage()
    {
        return view('website.contact');
    }

    public function sendMail()
    {

    }

    public function getTeam()
    {
        $members = Team::orderBy('id')->get();
        return view('website.team', [
            'members' => $members,
        ]);

    }

    public function getCareers()
    {
        $careers = careers::orderBy('id')->get();
        return view('website.careers', [
            'careers' => $careers,
        ]);

    }
}

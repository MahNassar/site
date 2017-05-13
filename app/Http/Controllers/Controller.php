<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Seo;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function __construct()
    {
        $latestThreeBlog = Blog::orderBy('id')->take(3)->get();
        view()->share('latestBlog', $latestThreeBlog);
        $seo = Seo::all();
        view()->share('seo', $seo);

    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

}
